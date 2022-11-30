<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>
    @if(Session::has('post-created'))
        {{Session::get('post-created')}}
    @endif
    <form action="{{route('addSubmit')}}" method='post'>
        @csrf
        <input type="text" name="title" placeholder="Title">
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>

</htmL>