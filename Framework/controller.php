<?php
declare(strict_types=1);

namespace framework;

class Controller
{
    public function html(array $data): void
    {
        extract($data);
        $main = include "path/to/view/{$controller}/{$action}.php";
        $header = include "path/to/view/header.php";
        $footer = include "path/to/view/footer.php";
        $template = include "path/to/view/template.php";
        echo $template;
    }
    
    public funcation json(array $data): void
    {
        header('Content-Type', 'application/json');
        echo json_encode($data);
    }
}
