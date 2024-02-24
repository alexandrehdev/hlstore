<?php

/**
 * 
 */
if (! function_exists('getLoggedUser')) {

    /**
     * Return the current logged user
     *
     * @return void
     */
    function loggedUser() {
        return Illuminate\Support\Facades\Auth::user();
    }

}