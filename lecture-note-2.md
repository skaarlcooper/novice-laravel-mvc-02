#

>13:26

![alt text](../md/images/image.png)

![alt text](../md/images/image-1.png)

>Laravel Route Constraints

<http://localhost/post/10> ---> whereNumber('id')

<http://localhost/post/yahoobaba> ---> whereAlpha('name')

<http://localhost/post/news10> ---> whereAlphaNumeric('name')

<http://localhost/post/song> ---> whereIn('category', ['movie', 'song'])

<http://localhost/post/@10> ---> whereNumber('id', '[@0-9]+')

------------------------------

Route::get('/post/{id}', function(string $id){
    return 'User '.$id;
})->whereNumber('id');

------------------------------

## Laravel Named Routes

![alt text](../md/images/image-2.png)

### Case 1

><http://localhost/page/about>

Route:get('/page/about', function(){
    return 'About page';
});

>first.blade.php
<a href='/page/about'>About</a>

>second.blade.php
<a href='/page/about'>About</a>

>third.blade.php
<a href='/page/about'>About</a>

### Case 2

><http://localhost/page/about>

Route:get('/page/about-us', function(){
    return 'About page';
})->name('about');

>first.blade.php
<a href='{{route("/page/about")}}'>About</a>

>second.blade.php
<a href='{{route("/page/about")}}'>About</a>

>third.blade.php
<a href='{{route("/page/about")}}'>About</a>

![alt text](../md/images/image-3.png)

![alt text](../md/images/image-4.png)

## Laravel Route Groups

![alt text](../md/images/image-5.png)

Route::get('page/post/1', function(){});
Route::get('page/about/', function(){});
Route::get('page/gallery/', function(){});

==> Route::prefix('page')->group(function(){
    Route::get('/products/', [ProductsController::class, 'index'])->name('pros');
    Route::get('/categories/', [CategoriesController::class, 'index'])->name('catalogs');
});

Route::fallback([ProductController::class, 'index']);

![alt text](../md/images/image-6.png)

![alt text](../md/images/image-7.png)

>Laravel Blade Template Syntax

<?php
    echo "hello";
?>

=> {{"hello"}}

<?php
    echo $name;
?>

=> {{$name}}

<?php
    echo "<h1>hello</h1>";
?>

=> {{!!"hello"!!}}

<?php
?>

=> @php
@endphp

<?php
    // comment;
?>

=> {{-- comment --}}

>Blade Control Structure Syntax

<?php
    if(condition){

    }else if(condition){

    }else{

    }
?>

=> @if
@elseif
@else
@endif

<?php
    switch($choice){
        case 'abc':
            statement 1;
            break;

        case 'bcd':
            statement 2;
            break;

        case 'cde':
            statement 3;
            break;
        default:
            default statement;
    }
?>

=> @switch($choice)
    @case('abc')
        statement 1;
        @break
    @case('bcd')
        statement 2;
        @break
    @case('cde')
        statement 3;
        @break
    @default
        statement default;
@endswitch

<?php
    isset($abc){
        // statement
    }
?>

=> @isset($abc)
        // statement
@endisset

<?php
    if(empty($a)){
        // statement
    }
?>

=> @empty($a)
        // statement
@endempty

@foreach($users as $user)
    <li>User name: {{$user->name}}</li>
@endforeach

@forelse($users as $user)
    <li>User id: {{$user->id}}</li>
@empty
    <h1>No body here</h1>
@endforelse

@while(condition)
    statement
@endwhile

@for($i=0;$i<10;$i++)
    The current id: {{$i}}
@endfor

Blade Loop variable for @foreach

![alt text](../md/images/image-8.png)

![alt text](../md/images/image-9.png)

![alt text](../md/images/image-10.png)

![alt text](../md/images/image-11.png)

![alt text](../md/images/image-12.png)

## Including Subviews with Conditional Check

![alt text](../md/images/image-13.png)

@includeWhen

@includeUnless

## Blade: Template Inheritance - Blade Template Main Directives

![alt text](../md/images/image-14.png)

![alt text](../md/images/image-16.png)
![alt text](../md/images/image-17.png)
![alt text](../md/images/image-18.png)

![alt text](../md/images/image-1.png)

![alt text](../md/images/image-19.png)

![alt text](../md/images/image-20.png)

>Blade Template: Dynamic JS values

![alt text](../md/images/image-21.png)

>Passing data: Route to View

![alt text](../md/images/image-22.png)

>Laravel Controller
![alt text](../md/images/image-23.png)

![alt text](../md/images/image-24.png)

<https://stackoverflow.com/questions/23505875/laravel-routeresource-vs-routecontroller>

![alt text](../md/images/image-25.png)

Laravel: Single Action Controllers

![alt text](../md/images/image-26.png)

<https://driesvints.com/blog/the-beauty-of-single-action-controllers/>

![alt text](../md/images/image-27.png)

>Laravel 11

>Laravel migration

![alt text](../md/images/image-28.png)

![alt text](../md/images/image-29.png)

![alt text](../md/images/image-30.png)

>String datatypes in MySQL

![alt text](../md/images/image-31.png)

>Numeric datatypesin MySQL

![alt text](../md/images/image-32.png)

![alt text](../md/images/image-33.png)

>Laravel migrations

    -> Create Migrations 
    -> Create Database's Tables 
    -> Define Table's Column Datatypes
    -> Rollback and Reset Migrations

![alt text](../md/images/image-34.png)

>Laravel modification with migrations

Column modification:
    -> Add new Column
    -> Rename Column
    -> Delete Column
    -> Change Column Order
    -> Change datatype of Column
    -> Change size of Column

Table modification:
    -> Rename Table
    -> Delete Table

![alt text](../md/images/image-35.png)

>Laravel: add to column with migration

![alt text](../md/images/image-36.png)

>Laravel: modify column with migration

![alt text](../md/images/image-37.png)

![alt text](../md/images/image-38.png)

>Laravel: Modify Table with migration

![alt text](../md/images/image-39.png)

>Laravel: Constraints with Migration

![alt text](../md/images/image-40.png)

>Laravel: Column modifiers

![alt text](../md/images/image-41.png)

![alt text](../md/images/image-42.png)

>Laravel Migration I && II

    -> Create Migration File
    -> Create Database's Tables
    -> Modify Tables
    -> Add Constraints & Modifiers on Tables
    -> Rollback and Reset Migration

![alt text](../md/images/image-43.png)

>Laravel Primary Key & Foreign Key(s) Constraints

![alt text](../md/images/image-44.png)

>insert into students(name, email) values('nguyen van cu', '<quynh232000@gmail.com>'),('nguyen van quynh', '<quynh2320001@gmail.com>'),('nguyen quang cu', '<quynh2320002@gmail.com>');

![alt text](../md/images/image-45.png)

mysqldump --databases --port=3993 --user=root --password yahoo_baba > yahoo_baba.sql

For example, when applied to a foreign key relationship, this constraint provides for the automated deletion of dependent records when the referenced record is destroyed. As a result, developers can use the DELETE CASCADE constraint to ease relational data management and eliminate orphaned entries, which can lead to inconsistencies.

This feature makes preserving referential integrity in MySQL databases easy, improving overall data dependability and consistency.

![alt text](../md/images/image-46.png)

>insert into libraries(book, due_date, status, id_student) values('nguyen van quang cu', '2023-11-11', 1, 1);

![alt text](../md/images/image-47.png)

    SDK for Java
    SDK for Python
    SDK for TypeScript and JavaScript
    SDK for .NET
    SDK for Go
    SDK for Ruby
    SDK for PL/SQL
    Command-line interface (CLI)

>Laravel: Foreign Key with Cascade

![alt text](../md/images/image-48.png)

![alt text](../md/images/image-49.png)

>Laravel: Foreign Key with Cascade & Restrict

![alt text](../md/images/image-50.png)

    cascadeOnDelete();
    cascadeOnUpdate();
    restrictOnDelete();
    restrictOnUpdate();
    nullOnDelete();

![alt text](../md/images/image-51.png)

$table->foreign('stu_id')->references('id')->on('students');

$table->foreignId('stu_id')->constrained('students');

$table->unsignedBigInterger('student_id');
$table->foreignId('student_id')->constrained();

insert into students(name, email) values('nguyen van cu', '<quynh232000@gmail.com>'),('nguyen van quynh', '<quynh2320001@gmail.com>'),('nguyen quang cu', '<quynh2320002@gmail.com>');

>insert into libraries(book, due_date, status, id_stu) values('nguyen van quynh aka quang so cu', '2023-11-11', 1, 2), ('nguyen van quang cu', '2023-11-11', 1, 1),('nguyen van quang cu', '2023-11-11', 1, 1);

>Laravel - Drop Key Constraints

![alt text](../md/images/image-52.png)

php artisan make:migration update_library_table --table=libraries

>update students set name='hai quay xe' and id=99 where id =3;

>A foreign key is a column (or combination of columns) in a table whose values must match values of a column in some other table. FOREIGN KEY constraints enforce referential integrity, which essentially says that if column value A refers to column value B, then column value B must exist.

![alt text](../md/images/image-53.png)

>Laravel Seeder
![alt text](../md/images/image-54.png)

1.> Caching
2.> Queues and Jobs
3.> Advanced Eloquent and DB Operations
4.> Creating Artisan Commands
5.> Events and Listeners
6.> API Development
8.> Authentication and Authorization

>Laravel Seeder

$collection = collect(['taylor', 'abigail', null])->map(function (?string $name) {
    return strtoupper($name);
})->reject(function (string $name) {
    return empty($name);
});

>php artisan db:seed --class=UserSeeder

>StudentSeeder.php

        $students = collect([
            [
                'name' => 'Nguyen Van Quang so Cu 1',
                'email' => 'quangsocu1@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 2',
                'email' => 'quangsocu2@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 3',
                'email' => 'quangsocu3@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 4',
                'email' => 'quangsocu4@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 5',
                'email' => 'quangsocu5@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 6',
                'email' => 'quangsocu6@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 7',
                'email' => 'quangsocu7@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 8',
                'email' => 'quangsocu8@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 9',
                'email' => 'quangsocu9@gmail.com',
            ],
            [
                'name' => 'Nguyen Van Quang so Cu 10',
                'email' => 'quangsocu10@gmail.com',
            ],

        ]);

        $students->each(function ($stu) {
            Student::insert($stu);
        });

>json/students.json

[
    {
        "name": "Nguyen Van Quang so Cu 1",
        "email": "quangsocu1@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 2",
        "email": "quangsocu2@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 3",
        "email": "quangsocu3@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 4",
        "email": "quangsocu4@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 5",
        "email": "quangsocu5@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 6",
        "email": "quangsocu6@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 7",
        "email": "quangsocu7@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 8",
        "email": "quangsocu8@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 9",
        "email": "quangsocu9@gmail.com"
    },
    {
        "name": "Nguyen Van Quang so Cu 10",
        "email": "quangsocu10@gmail.com"
    }
]

>StudentSeeder.php

    public function run(): void
    {
        $json = File::get(path: 'database/json/students.json');

        $students = collect(json_decode($json));

        $students->each(function ($stu) {
            Student::create([
                "name" => $stu->name,
                "email" => $stu->email
            ]);
        });
    }

>StudentSeeder.php

        for ($i = 0; $i < 10; $i++) {
            Student::create([
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
            ]);
        }

>Laravel Seeders Commands

![alt text](../md/images/image-55.png)

>Laravel Insert Data into Database

![alt text](../md/images/image-56.png)

>Laravel - Step to work in Factory

![alt text](../md/images/image-57.png)

>Laravel - Model Factory

            // name, age, email, address, city, phone, password
            $table->string('name', 255);
            $table->integer('age', 255);
            $table->string('email', 255)->unique()->nullable();
            $table->text('address', 255);
            $table->string('city', 255);
            $table->string('phone', 255);
            $table->string('password', 255);

![alt text](../md/images/image-58.png)

![alt text](../md/images/image-59.png)

![alt text](../md/images/image-60.png)

>Laravel - Query Builder - Steps to work with Database

![alt text](../md/images/image-61.png)

![alt text](../md/images/image-62.png)

![alt text](../md/images/image-63.png)

![alt text](../md/images/image-64.png)

# Create a new repository on the command line

touch README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin <https://github.com/c0ldlimit/vimcolors.git>
git push -u origin master

# Push an existing repository from the command line

git remote add origin <https://github.com/c0ldlimit/vimcolors.git>
git push -u origin master
