<html>
    <body>
        <p>
            @if (count($hobbies)==1)
            I have one hobby
            @elseif (count($hobbies)>1)
            I have multiple hobbies
            @else
            I dont have hobbies
            @endif
        </p>
    </body>
</html>