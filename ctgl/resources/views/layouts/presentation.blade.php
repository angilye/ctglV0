@extends('template')

@section('title', 'Présentation')

@section('SousTitre', 'Association de Chiens de Traineau Gorges du Loup - C.T.G.L.')

@section('content')


    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <h1>Classic editor</h1>
    <form action="[URL]" method="post">
        <textarea name="content" id="editor">
            &lt;p&gt;This is some sample content.&lt;/p&gt;
        </textarea>
        <p><input type="submit" value="Submit"></p>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
