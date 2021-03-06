<?php

namespace App\Widgets;

use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Contato;

class ContatoWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Contato::count();
        $string = trans_choice('dimmer.contato', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-chat',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.contato_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('dimmer.contato_link_text'),
                'link' => route('voyager.contato.index'),
            ],
            'image' => 'coment-widget-bg.jpg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', new Contato());
    }
}
