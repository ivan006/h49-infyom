<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{{ route('pages.index') }}"><i class="fa fa-edit"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
    <a href="{{ route('contacts.index') }}"><i class="fa fa-edit"></i><span>Contacts</span></a>
</li>

<li class="{{ Request::is('searches*') ? 'active' : '' }}">
    <a href="{{ route('searches.index') }}"><i class="fa fa-edit"></i><span>Searches</span></a>
</li>

<li class="{{ Request::is('locationScopes*') ? 'active' : '' }}">
    <a href="{{ route('locationScopes.index') }}"><i class="fa fa-edit"></i><span>Location Scopes</span></a>
</li>

