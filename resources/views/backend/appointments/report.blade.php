@extends('backend.layouts.app')
@section('content')
<form action="" method="post">
    <label for="">From</label>
    <input type="text" name="input" placeholder="YYYY-MM-DD" required
pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])-(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])-(?:30))|(?:(?:0\[13578\]|1\[02\])-31))"
title="Enter a date in this format YYYY-MM-DD"/>

<input type="submit">
</form>
@endsection
