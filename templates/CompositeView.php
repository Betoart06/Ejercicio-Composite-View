<?php
class CompositeView {
    private $views = [];

    public function addView($viewPath, $variables = []) {
        $this->views[] = ['path' => $viewPath, 'variables' => $variables];
    }

    public function render() {
        foreach ($this->views as $view) {
            extract($view['variables']);
            require $view['path'];
        }
    }
}
