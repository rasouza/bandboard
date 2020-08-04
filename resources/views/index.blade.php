@extends('layouts.master')

@section('content')
    <div class=col-md-10>
        <div class="block block-drop-shadow">
            <div class=header>
                <h2>Messaging</h2>
                <div class="side pull-right">
                    <ul class=buttons>
                        <li>
                            <a href=#>
                                <span class=icon-user></span>
                            </a>
                        </li>
                        <li>
                            <a href=#>
                                <span class=icon-cogs></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content messages npr npb npt">
                <div class=scroll style=height:250px></div>
            </div>
            <div class=footer>
                <div class=input-group>
                    <span class=input-group-addon><i class=icon-comment></i></span>
                    <input type=text class="form-control message" placeholder=message..>
              <span class=input-group-btn>
                <button class="btn send-message">
                    <span class=icon-chevron-up></span>
                </button>
              </span>
                </div>
            </div>
        </div>
    </div>
@stop