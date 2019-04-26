<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        $ss = $request->user()->addresses;
        p($ss);die;
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
}

alias.gaa="git add -A"
alias.gs="git status"
alias.gc="git commit -m"
alias.gp="git push"
alias.gl="git log --color --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(13)<%an>%Creset' --abbrev-commit"
alias.gl2="git log --color --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%ci) %C(13)<%an>%Creset' --abbrev-commit"
alias.gl3="git log --pretty=format:'%h - %an -%ad -%s' --graph"
alias.gl4="git log --color --graph --pretty=format:'%Cred%h%Creset -%Creset %s %Cgreen(%cr) %C(yellow)%d%C(13)<%an>%Creset' --abbrev-commit"

