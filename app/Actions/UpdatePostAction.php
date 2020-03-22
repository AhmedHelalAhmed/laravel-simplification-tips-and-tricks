<?php
namespace App\Actions;

/**
 * Class UpdatePostAction
 * @package App\Actions
 */
class UpdatePostAction
{
    /**
     * @var
     */
    private $output;

    /**
     * @param $input
     * @return mixed
     */
    public function execute($input)
    {
        $this->output=$input['post']->update($input);
        return $this->output;
    }
}
