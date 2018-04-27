<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Update</title>
    </head>
    <body>

        {{Form::model($user, ['method'=>'patch', 'action'=>['testing@update', $user->id]])}}
        
        {{Form::label('name', 'Name')}}
        {{Form::text('name')}}<br>

        {{Form::label('email', 'Email')}}
        {{Form::text('email')}}<br>

        {{Form::label('picture', 'Profile Picture')}}
        {{Form::file('picture')}}<br>

        {{Form::label('ic', 'IC No')}}
        {{Form::text('ic')}}<br>

        {{Form::label('mobile', 'Phone No')}}
        {{Form::text('mobile')}}<br>

        {{Form::label('officephone', 'Ofiice Phone No')}}
        {{Form::text('officephone')}}<br>

        {{Form::label('occupation', 'Occupation')}}
        {{Form::text('occupation')}}<br>

        {{Form::label('race', 'Race')}}
        {{Form::text('race')}}<br>

        {{Form::label('religion', 'Religion')}}
        {{Form::text('religion')}}<br>

        {{Form::label('address1', 'Address 1')}}
        {{Form::text('address1')}}<br>

        {{Form::label('address2', 'Address 2')}}
        {{Form::text('address2')}}<br>

        {{Form::label('postcode', 'Postcode')}}
        {{Form::text('postcode')}}<br>

        {{Form::label('city', 'City')}}
        {{Form::text('city')}}<br>

        {{Form::label('province', 'Province')}}
        {{Form::text('province')}}<br>

        {{Form::label('note', 'Note')}}
        {{Form::text('note')}}<br>

        Gender{{Form::radio("gender", 'male')}}Male
        {{Form::radio("gender", 'female')}}Female<br>


        {{Form::submit("Update")}}
        <br>
        {{Form::close()}}

    </body>
</html>