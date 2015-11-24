 @if(Auth::check())

		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		 	<i class="fa fa-user"></i> {{Auth::user()->user}}<span class="caret"></span>
		 </a>
         <ul class="dropdown-menu" role="menu">
            <li>
            	<a href="{{route('getlogout')}}">Finalizar Sesion
            	</a>
            </li>
         </ul>
 @else
 		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		 	<i class="fa fa-user"></i><span class="caret"></span>
		 </a>
         <ul class="dropdown-menu" role="menu">
            <li>
            	<a href="{{route('getlogin')}}">Iniciar Sesion
            	</a>
            </li>
         </ul>
@endif