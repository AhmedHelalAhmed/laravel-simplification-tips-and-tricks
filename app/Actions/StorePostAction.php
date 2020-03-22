<?php
namespace App\Actions;

/**
 * Class StorePostAction
 * @package App\Actions
 */
class StorePostAction
{
    private $output;

    /**
     * @param $input
     * @return mixed
     */
    public function execute($input)
    {
        $this->output['post']= $input['post'];
        $this->output['post']->title = $input['title'];
        $this->output['post']->text = $input['text'];
        $this->output['post']->category_id = $input['category_id'];
        $this->output['post']->save();
        return  $this->output['post'];
    }
}
