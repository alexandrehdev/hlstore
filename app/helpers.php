<?php


if (! function_exists('getLoggedUser')) {
    function getLoggedUser() {
        return Illuminate\Support\Facades\Auth::user();
    }
}