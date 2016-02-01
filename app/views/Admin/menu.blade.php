<ul class="sidebar-menu">
    <li>
        <a href="{{action('AdminLayoutController@index')}}">
            <i class="fa fa-building-o"></i> <span>Layouts</span> <small class="badge pull-right bg-green">Layouts</small>
        </a>
    </li>    
    <li class="active">
        <a href="{{action('AdminPageController@index')}}">
            <i class="fa fa-book"></i> <span>Pages</span>
        </a>
    </li>
    
    <li>
        <a href="{{action('AdminSnippetController@index')}}">
            <i class="fa fa-anchor"></i> <span>Snippet</span>
        </a>
    </li>
    

    <li>
        <a href="{{action('AdminUserController@index')}}">
            <i class="fa fa-user"></i> <span>User</span>
        </a>
    </li>

</ul>
