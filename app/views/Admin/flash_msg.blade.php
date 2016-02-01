{{-- this msg will show after edit an user--}}
@if (Session::has('flash_add_success'))
<div id="flash_add_success" class=" alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_add_success') }}</div>
@endif

{{-- this msg will show after edit an user--}}
@if (Session::has('flash_edit_success'))
<div id="flash_edit_success" class=" alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_edit_success') }}</div>
@endif

{{-- this msg will show after delete an user--}}

@if (Session::has('flash_dlt_success'))
<div id="flash_dlt_success" class=" alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_dlt_success') }}</div>
@endif