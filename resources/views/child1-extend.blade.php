@extends('layout.master')

@section('title', 'Child-1')
<h3>I am Child1 Layout</h3>

@section('sidebar')
    @parent

  <ul>
      <li>Child-1</li>
      <li>Child-1.1</li>
      <li>Child-1.2</li>
  </ul>
@endsection


@section('content')
    <p>This is my body content of child-1.</p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
@endsection
