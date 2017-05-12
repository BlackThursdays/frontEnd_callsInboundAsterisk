<?php

namespace Cosapi\Listeners;

use Cosapi\Events\LoginUsers;
use Cosapi\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class LastLogin
{

    private $auth;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  LoginUsers  $event
     * @return void
     */
    public function handle(LoginUsers $event)
    {
        $event->register_event('11',$event->obtener_userid(),'','','',null);

        \DB::table('agent_online')->insert(array(
            'agent_user_id' => Auth::user()->id,
            'agent_name'    => Auth::user()->username,
            'agent_role'    => Auth::user()->role,
            'event_name'    => 'Login',
            'event_id'      => 11,
            'event_time'    => number_format(microtime(true)*1000,0,'.','')
        ));
    }
}