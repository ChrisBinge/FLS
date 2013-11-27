<html>
    <body>
        <h1>Hello, <?php echo $name; ?></h1>
        echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
        {{ Form::open(array('url' => 'foo/bar')) }}
    //
{{ Form::close() }}
    </body>
</html>