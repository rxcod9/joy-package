<?php

namespace Joy\ReplaceKeyword\Http\Traits;

use Illuminate\Http\Request;

trait ReplaceKeywordAction
{
    public function replaceKeyword(Request $request)
    {
        // Your magic here

        return redirect()->back()->with([
            'message'    => __('joy-replace-keyword::generic.successfully_replace_keyworded') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
            'alert-type' => 'success',
        ]);
    }
}
