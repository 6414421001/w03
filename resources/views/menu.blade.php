<body class="bg-black">

<div>
<div class="grid grid-cols-5 my-4 gap-2 ">

    <a href="{{ route('faculty.index') }}">
        <div class="border rounded-lg flex items-center justify-center p-4 hover:bg-white hover:text-black transition-all duration-300">
            Faculty
        </div>
    </a>

    <a href="{{ route('program.index') }}">
        <div class="border rounded-lg flex items-center justify-center p-4 hover:bg-white hover:text-black transition-all duration-300">
            Program
        </div>
    </a>

    <a href="{{ route('student.index') }}">
        <div class="border rounded-lg flex items-center justify-center p-4 hover:bg-white hover:text-black transition-all duration-300">
            Student
        </div>
    </a>

    <a href="{{ route('vaccine.index') }}">
        <div class="border rounded-lg flex items-center justify-center p-4 hover:bg-white hover:text-black transition-all duration-300">
            Vaccine
        </div>
    </a>

    <a href="{{ route('vaccine_record.index') }}">
        <div class="border rounded-lg flex items-center justify-center p-4 hover:bg-white hover:text-blacktransition-all duration-300">
            Vaccine Record
        </div>
    </a>

</div>
    
</body>