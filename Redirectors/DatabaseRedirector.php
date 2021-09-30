<?php


namespace App\Twill\Capsules\Redirects\Redirectors;

use App\Twill\Capsules\Redirects\Repositories\RedirectRepository;
use Symfony\Component\HttpFoundation\Request;
use Spatie\MissingPageRedirector\Redirector\Redirector;

class DatabaseRedirector implements Redirector
{
    public function getRedirectsFor(Request $request): array
    {
        $redirects = app()->make(RedirectRepository::class)->get([],[],[],-1);

        $formattedRedirects = [];

        $redirects->each(function($redirect) use (&$formattedRedirects) {
            $formattedRedirects[$redirect->old_url] = [ $redirect->new_url, $redirect->status];
        });

        return $formattedRedirects;
    }
}
