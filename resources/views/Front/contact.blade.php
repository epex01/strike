@extends('Layouts.home')
@section('title')
Contact Us
@endsection
@section('slider')
<div class="fade-appear-done fade-enter-done" style="padding-bottom: 6rem; padding-top: 2rem;"><h1 class="center app-relative white-text">Contact Us</h1><p class="app-relative center white-text"></p></div>
@endsection
@section('content')
<main class="" style="min-height: 60vh;"><div class="bg fade-appear-done fade-enter-done"><div class="container"><br><br><center></center><br><div class="container"><form autocomplete="off"><div class="row"><div class="input-field col s12"><input type="text" id="subject" name="subject" maxlength="300" inputmode="text" required="" value=""><label class="active" for="subject">subject</label></div><div class="col s12"><div class="input-field"><textarea id="body" name="body" style="height: 130px; padding: 5px;"></textarea><label for="body" class="active">body</label></div></div></div><div><button type="submit" class="btn btn-full">Submit</button></div></form></div><br></div><br><br></div></main>
@endsection