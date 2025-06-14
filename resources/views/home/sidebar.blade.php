<nav id="sidenav">
    <ul>
      <li><a href="#header">Home</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#Offer">Offer</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#course">course</a></li>
      @if (Route::has('login'))
      <nav class="">
          @auth
          <li>
              <x-app-layout>
              </x-app-layout>
          </li>
          
          @else
              <li>
                  <a
                      href="{{ route('login') }}"
                      class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"
                  >
                      Log in
                  </a>
              </li>

              @if (Route::has('register'))
                  <li>
                      <a
                          href="{{ route('register') }}"
                          class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                          Register
                      </a>
                  </li>
              @endif
          @endauth
      </nav>
  @endif
    </ul>
  </nav>