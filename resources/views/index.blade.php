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
                <div class=scroll style=height:250px>
                    <div class=messages-item>
                        <img src="{{ asset('img/example/user/dmitry_s.jpg') }}" class="img-circle img-thumbnail" />
                        <div class=messages-item-text>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque</div>
                        <div class=messages-item-date>14:33 30.08.2013</div>
                    </div>
                    <div class="messages-item inbox">
                        <img src="{{ asset('img/example/user/olga_s.jpg') }}" class="img-circle img-thumbnail" />
                        <div class=messages-item-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit</div>
                        <div class=messages-item-date>14:32 30.08.2013</div>
                    </div>
                </div>
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