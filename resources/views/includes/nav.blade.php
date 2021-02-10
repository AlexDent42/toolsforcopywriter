
                            <nav class="navbar main-menu">
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav js-menubar">
                                        <li class="level1 active dropdown"><a href="{{route('index')}}">Home</a>
                                            
                                        </li>
                                        
										
										
                                        <li class="level1 active dropdown">
                                            <a href="{{route('check-server-status')}}">Check server status</a>
                                            
                                        </li>

                                        <li class="level1 active dropdown">
                                            <a href="{{route('passwords-generator')}}">Passwords generator</a>

                                            
                                        </li>

                                        <li class="level1 active dropdown">
                                             <a href="{{route('word-counter')}}">Word counter</a>                
                                        </li>

                                         <li class="level1 active dropdown">
                                             <a href="{{route('text-case')}}">Change Text Case</a>                
                                        </li>

                                           <li class="level1 active dropdown">
                                             <a href="{{route('md5-generator')}}">Online MD5 generator</a>                
                                        </li>

                                        <li class="level1 active dropdown">
                                             <a href="{{route('text-editor')}}">Online Text Editor</a>                
                                        </li>

                                        <li class="level1 active dropdown">
                                             <a href="{{route('reverse-text')}}">Reverse Text Generator</a>                
                                        </li>

                                        <li class="level1 active dropdown">
                                             <a href="{{route('text-binary')}}">Text to Binary Converter</a>                
                                        </li>

                                        <li class="level1 active dropdown">
                                             <a href="{{route('keyword-density')}}">Keyword Density Checker</a>                
                                        </li>


                                         <!-- Authentication Links -->
                        @guest
                        <li class="level1 active dropdown">
                                <a href="#">Sign in</a>
                                <span class="plus js-plus-icon"></span>
                                 <ul class="dropdown-menu menu-level-1">

                                            @if (Route::has('login'))
                                                  <li class="level2">
                                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif
                                            
                                            @if (Route::has('register'))
                                                 <li class="level2">
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                </ul>
                        </li>   
                        @else
                             
                                 <li class="level1 active dropdown">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                     
                        @endguest
                   



                          {{--   <li class="level1 active dropdown">
                                <a href="#">Pages</a>
                                <span class="plus js-plus-icon"></span>
                                <ul class="dropdown-menu menu-level-1">
                                    <li class="level2"><a href="login.html" title="Login">Login</a></li>
                                    <li class="level2"><a href="register.html" title="Register">Register</a></li>
                                </ul>
                            </li> --}}
                                       


















                                    </ul>
                                </div>
								<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(67945747, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67945747" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
                            </nav>
                        