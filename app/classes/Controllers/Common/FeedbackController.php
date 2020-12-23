<?php


namespace App\Controllers\Common;

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Feedback\FeedbackCreateForm;
use App\Views\Tables\User\FeedbackTable;
use Core\View;
use Core\Views\Link;

class FeedbackController
{
    protected BasePage $page;

    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Feedback',
            'js' => ['/media/js/user/feedback.js']
        ]);
    }

    public function index(): ?string
    {
        $user = App::$session->getUser();

        if ($user) {
            $forms = [
                'create' => (new FeedbackCreateForm())->render(),
            ];

        } else {
            $msg = 'Nori palikti komentarą?';
            $links = [
                'register' => (new Link([
                    'url' => App::$router::getUrl('register'),
                    'text' => 'Registruotis'
                ]))->render()
            ];
        }

        $table = new FeedbackTable();

        $content = (new View([
            'title' => 'Atsiliepimai:',
            'table' => $table->render(),
            'forms' => $forms ?? [],
            'message' => $msg ?? [],
            'links' => $links ?? []
        ]))->render(ROOT . '/app/templates/content/feedback.tpl.php');

        $this->page->setContent($content);
        return $this->page->render();
    }
}