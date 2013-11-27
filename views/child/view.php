<html>
    <body>
        <h1>Hello!</h1>
        <?php echo $child; ?>
        echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
        {{ Form::open(array('url' => 'foo/bar')) }}
    //
{{ Form::close() }}
    </body>
</html>

