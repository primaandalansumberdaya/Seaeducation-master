@extends('layouts.dashboard')

@section('title', ' Edit Profile')

@section('content')

    <section class="bg-blue-5 flex justify-center py-8 ">
        <!-- photo biodata -->
        <section class="flex flex-col md:max-w-fit h-fit sticky top-8 profile-state-support">

            <div class="bg-white p-12 rounded-lg shadow-md text-center w-64">

                <img src="" alt="Profile-Image"
                    class="w-28 h-28 rounded-full mx-auto mb-4 border-2 border-slate-300" />

                <div class="flex flex-col">
                    <label for="choose"
                        class="px-3 py-2 text-sm font-medium leading-4 text-gray-100 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Choose File
                    </label>

                    <input type="file" accept="image/*" id="choose" name="photo" hidden>

                    {{-- {{ route('member.delete.photo.profile') }} --}}
                    <a href="#" type="button"
                        class="px-3 py-2 text-sm font-medium leading-4 text-red-100 bg-transparent rounded-md hover:bg-gray-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        onclick="return confirm( 'Are you sure want to delete your photo?' )">
                        Delete
                    </a>
                </div>

            </div>

            <div class="box-border py-3 px-8 mt-5 border bg-white rounded-lg shadow-md">

                <div class="flex flex-col">

                    <div class="flex-1">

                        <p
                            class="text-[16px] md:text-heading-5 xl:text-heading-6 2xl:text-sm font-semibold pb-3 mb-3 border-b-2 px-3">
                            Detail
                        </p>

                        <ul class="text-[14px] md:text-heading-5 xl:text-heading-6 2xl:text-sm">
                            <li class="NavSection active"><a class="" href="#personal">Personal Info</a></li>
                            <li class="NavSection"><a class="" href="#education">Education History</a></li>
                            <li class="NavSection"><a class="" href="#experience">Experiences</a></li>
                            <li class="NavSection"><a class="" href="#skill">Skills</a></li>
                            <li class="NavSection"><a class="" href="#language">Languages</a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>

        {{-- biodata section --}}
        <form action="" class="flex flex-col">
            <section class="flex flex-col w-auto min-h-screen px-4">

                <!-- Form Edit Profile -->
                <section id="personal" class="rounded-lg shadow-md bg-white p-8 border mb-5 content-profile">

                    <div class="md:text-heading-3 font-bold mb-2">Personal Information</div>
                    <div class=" font-bold mb-6 border-b-2"></div>

                    {{-- Form Name --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="firstName" class="block mb-1 text-heading-4">First Name</label>
                            <input placeholder="Nama depan" type="text" name="firstName" id="firstName"
                                autocomplete="firstName"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->firstName ?? ' ' }}" required>

                            @if ($errors->has('firstName'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('firstName') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="lastName" class="block mb-1 text-heading-4">Last Name</label>
                            <input placeholder="Nama belakang" type="text" name="lastName" id="lastName"
                                autocomplete="lastName"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->lastName ?? ' ' }}" required>

                            @if ($errors->has('lastName'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('lastName') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- form about me --}}
                    <div class="flex w-full flex-col mb-4">
                        <label for="aboutMe" class="block mb-1 text-heading-4">About Me</label>
                        <textarea name="aboutMe" id="aboutMe"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                            rows="5" value="{{ $user->detail_users->aboutMe ?? ' ' }}"></textarea>
                    </div>

                    {{-- Form Birtplace and date --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="birthPlace" class="block mb-1 text-heading-4">Birth Place</label>
                            <input placeholder="Tempat lahir" type="text" name="birthPlace" id="birthPlace"
                                autocomplete="birthPlace"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->birthPlace ?? ' ' }}" required>

                            @if ($errors->has('birthPlace'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('birthPlace') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="birthDate" class="block mb-1 text-heading-4">Birth Date</label>
                            <input placeholder="Nama Belakang" type="date" name="birthDate" id="birthDate"
                                autocomplete="birthDate"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->birthDate ?? ' ' }}" required>

                            @if ($errors->has('birthDate'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('birthDate') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- Form Gender and Marital --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="gender" class="block mb-1 text-heading-4">Gender</label>
                            <input placeholder="Jenis kelamin" type="text" name="gender" id="gender"
                                autocomplete="gender"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->gender ?? ' ' }}" required>

                            @if ($errors->has('gender'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('gender') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="marital" class="block mb-1 text-heading-4">Marital Status</label>
                            <input placeholder="Status pernikahan" type="text" name="marital" id="marital"
                                autocomplete="marital"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->marital ?? ' ' }}" required>

                            @if ($errors->has('marital'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('marital') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- Form Contact --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="phoneNumber" class="block mb-1 text-heading-4">Phone Number</label>
                            <input placeholder="Phone Number" type="number" name="phoneNumber" id="phoneNumber"
                                autocomplete="phoneNumber"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->phoneNumber ?? ' ' }}" required>

                            @if ($errors->has('phoneNumber'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('phoneNumber') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="phoneNumber2" class="block mb-1 text-heading-4">Whatsapp Number</label>
                            <input placeholder="Whatsapp Number" type="number" name="phoneNumber2" id="phoneNumber2"
                                autocomplete="phoneNumber2"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->phoneNumber2 ?? ' ' }}" required>

                            @if ($errors->has('phoneNumber2'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('phoneNumber2') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- Email Contact --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="email" class="block mb-1 text-heading-4">Email</label>
                            <input placeholder="Nama Depan" type="text" name="email" id="email"
                                autocomplete="email"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->email ?? ' ' }}" required>

                            @if ($errors->has('email'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="socmed" class="block mb-1 text-heading-4">Social Media</label>
                            <input placeholder="Nama Belakang" type="text" name="socmed" id="socmed"
                                autocomplete="socmed"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->social_media->socmed ?? ' ' }}" required>

                            @if ($errors->has('socmed'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('socmed') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- Address --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="address" class="block mb-1 text-heading-4">Address</label>
                            <input placeholder="Alamat" type="text" name="address" id="address"
                                autocomplete="address"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->address ?? ' ' }}" required>

                            @if ($errors->has('address'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('address') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="regency" class="block mb-1 text-heading-4">City</label>
                            <input placeholder="Kota" type="text" name="regency" id="regency"
                                autocomplete="regency"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->regency ?? ' ' }}" required>

                            @if ($errors->has('regency'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('regency') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="province" class="block mb-1 text-heading-4">Province</label>
                            <input placeholder="Provinsi" type="text" name="province" id="province"
                                autocomplete="province"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->regency ?? ' ' }}" required>

                            @if ($errors->has('province'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('province') }}</p>
                            @endif
                        </div>

                    </div>

                    {{-- Province and Country --}}
                    <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                        <div class="w-full">
                            <label for="country" class="block mb-1 text-heading-4">Country</label>
                            <input placeholder="Negara Asal" type="text" name="country" id="country"
                                autocomplete="country"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->country ?? ' ' }}" required>

                            @if ($errors->has('country'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('country') }}</p>
                            @endif
                        </div>

                        <div class="w-full">
                            <label for="zipCode" class="block mb-1 text-heading-4">Zip Code</label>
                            <input placeholder="Kode Pos" type="text" name="zipCode" id="zipCode"
                                autocomplete="zipCode"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                value="{{ $user->detail_users->zipCode ?? ' ' }}" required>

                            @if ($errors->has('zipCode'))
                                <p class="mb-3 text-sm text-red-500">{{ $errors->first('zipCode') }}</p>
                            @endif
                        </div>


                </section>

                <!-- Form Edit education -->
                <section id="education" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                    <div class="md:text-heading-3 font-bold mb-2">Education</div>
                    <div class=" font-bold mb-6 border-b-2"></div>

                    <div class="input-profile input-card hidden">

                        <div id="parentInputSchool">

                            <div id="FormInputSchool">

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">School Name</label>
                                        <input placeholder="School Name" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Program or Major</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Enters School date</label>
                                        <input placeholder="Nama Belakang" type="date" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Graduate date</label>
                                        <input placeholder="Nama Belakang" type="date" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">School's Degree</label>
                                        <select id="whatDegree" name="degreeOptions"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm">
                                            <option value="" selected disabled>Which is your degree in this
                                                school</option>
                                            <option value="junior">Junior High School</option>
                                            <option value="senior">Senior High School</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="bachelor">Bachelor</option>
                                            <option value="master">Master</option>
                                        </select>

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">School Address</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">City</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Province</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Country</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Zip Code</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Certificate</label>
                                        <input id="actualInpCert"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            type="file">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <button id="btnRemoveInpSch" type="button" class="btn-remove mb-1">Remove</button> -->
                        <div class="flex flex-row gap-3">
                            <button id="btnRemSch" type="button" class="btn-remove">Remove -</button>
                            <button id="btnAddInpSch" type="button" class="btn-plus">Add +</button>
                        </div>

                    </div>

                    <button type="button" class="btn-add collapses">Tambah +</button>

                </section>

                <!-- Form Edit experience -->
                <section id="experience" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                    <div class="md:text-heading-3 font-bold mb-2">Experience</div>
                    <div class=" font-bold mb-6 border-b-2"></div>

                    <div class="input-profile input-card hidden">

                        <div id="parentInputExperience">
                            <div id="FormInputExperience">

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Company Name</label>
                                        <input placeholder="School Name" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Work Based on</label>
                                        <select id="experienceBase" name="baseOptions"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm">>
                                            <option value="" selected disabled>Choose one</option>
                                            <option value="hotel">Hotel</option>
                                            <option value="cruise">Cruise Ship</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Department</label>
                                        <input placeholder="Nama Depan" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Job Title or
                                            Position</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Supervisor
                                            Name</label>
                                        <input placeholder="Nama Depan" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Start Date</label>
                                        <input placeholder="Nama Depan" type="date" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">End of Contract</label>
                                        <input placeholder="Nama Belakang" type="date" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                </div>

                                {{-- form about me --}}
                                <div class="flex w-full flex-col mb-4">
                                    <label for="title" class="block mb-1 text-heading-4">Job Description</label>
                                    <textarea name="desc" id="desc"
                                        class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                        rows="5"></textarea>
                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Address</label>
                                        <input placeholder="Nama Depan" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Company Telephone
                                            Number</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>

                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">City</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Province</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">

                                        <label for="title" class="block mb-1 text-heading-4">Country</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Zip Code</label>
                                        <input placeholder="Nama Belakang" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif

                                    </div>

                                    <div class="w-full">
                                        <label for="title" class="block mb-1 text-heading-4">Certificate</label>
                                        <input id="actualInpCert"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            type="file">
                                        </input>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="flex flex-row gap-3">
                            <button id="btnRemExp" type="button" class="btn-remove">Remove -</button>
                            <button id="btnAddInpExp" type="button" class="btn-plus">Add +</button>
                        </div>

                    </div>

                    <button type="button" class="btn-add collapses">Tambah +</button>

                </section>

                <!-- Form Edit skill -->
                <section id="skills" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">
                    <div class="md:text-heading-3 font-bold mb-2">Skills</div>
                    <div class=" font-bold mb-6 border-b-2"></div>

                    <div class="input-skill input-card">

                        <div id="parentInputSkill">
                            <div id="FormInputSkill">

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <input placeholder="Nama Depan" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                    focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <button id="btnRemSkill" type="button" class="btn-remove">Remove -</button>
                            <button id="btnAddInpSkill" type="button" class="btn-plus mx-2">Add +</button>
                        </div>
                    </div>
                </section>

                <!-- Form Edit languange -->
                <section id="language" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                    <div class="md:text-heading-3 font-bold mb-2">Languange</div>
                    <div class=" font-bold mb-6 border-b-2"></div>

                    <div class="input-language input-card">

                        <div id="parentInputLanguage">
                            <div id="formInputLanguage">

                                <div class="flex flex-col md:flex-row w-full mb-4 gap-3">

                                    <div class="w-full">
                                        <input placeholder="Nama Depan" type="text" name="title" id="title"
                                            autocomplete="title"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary-shineblue
                                                focus:border-primary-shineblue sm:text-sm"
                                            value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <p class="mb-3 text-sm text-red-500">{{ $errors->first('title') }}</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="flex flex-row gap-3">
                            <button id="btnRemLang" type="button" class="btn-remove">Remove -</button>
                            <button id="btnAddInpLang" type="button" class="btn-plus">Add +</button>
                        </div>

                    </div>
                    <!-- <button type="button" class="btn-add collapses">Tambah +</button> -->
                </section>

            </section>
        </form>
    </section>

@endsection

@push('after-script')
    <script>
        // Collapse
        var coll = document.getElementsByClassName("collapses");
        var i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("coll-active");
                if (this.innerHTML === "Tambah +") {
                    this.innerHTML = "Hide";
                } else {
                    this.innerHTML = "Tambah +";
                }
                var content = this.previousElementSibling;
                if (content.classList.contains("hidden")) {
                    content.classList.remove("hidden");
                } else {
                    content.classList.add("hidden");
                }
            });
        };

        // School Inputs

        // Get all variables needed
        // const formInpSch = document.getElementById('formInpSch');
        // const btnRemove = document.querySelector('.btn-remove');
        const parentInputSchool = document.getElementById('parentInputSchool');
        const inpSch = document.getElementById('FormInputSchool');
        const btnAddInpSch = document.getElementById('btnAddInpSch');
        const btnRemSch = document.getElementById('btnRemSch');
        let counterSch = 1;

        const parentInputExperience = document.getElementById('parentInputExperience');
        const inpExp = document.getElementById('FormInputExperience');
        const btnAddInpExp = document.getElementById('btnAddInpExp');
        const btnRemExp = document.getElementById('btnRemExp');
        let counterExp = 1;

        const parentInputSkill = document.getElementById('parentInputSkill');
        const inpSkill = document.getElementById('FormInputSkill');
        const btnAddInpSkill = document.getElementById('btnAddInpSkill');
        const btnRemSkill = document.getElementById('btnRemSkill');
        let counterSkill = 1;

        const parentInputLanguage = document.getElementById('parentInputLanguage');
        const inpLang = document.getElementById('formInputLanguage');
        const btnAddInpLang = document.getElementById('btnAddInpLang');
        const btnRemLang = document.getElementById('btnRemLang');
        let counterLang = 1;

        // Function to clone the element
        function cloneElement(cloneInp, parentInp, counterInp) {
            const clone = cloneInp.cloneNode(true);
            const cloneID = cloneInp.id;
            const cloneSplitID = cloneID.split('-', 1);
            clone.id = `${cloneSplitID}-${counterInp}`;
            // Let's try to change all inputs inside the cloned element with randomized dynamic IDs
            const inpCloneChild = clone.querySelectorAll('input');
            const inpCloneChildSelect = clone.querySelectorAll('select');
            const inpCloneLables = clone.querySelectorAll('label.edit-label');
            // Update all labels
            inpCloneLables.forEach((labels) => {
                var lbl = labels.getAttribute('for');
                labels.setAttribute('for', `${lbl}-${counterInp}`);
            });
            inpCloneChild.forEach((inp) => {
                inp.id = `${inp.id}-${counterInp}`;
                inp.textContent = '';
            });
            // Let's try to change all selects inside the cloned element with randomized dynamic IDs
            inpCloneChildSelect.forEach((inp) => {
                inp.id = `${inp.id}-${counterInp}`;
                inp.textContent = '';
            });

            parentInp.appendChild(clone);
            if (counterInp != 1) {
                // const certFilename = clone.querySelectorAll('.sup-filename');
                // certFilename.forEach((filename) => {
                //   filename.id = `${filename.id}-${counterSch}`;
                // });
                // const certSch = clone.querySelectorAll('#certSch');
                // certSch.forEach((cert) => {
                //   cert.id = `${cert.id}-${counterSch}`;
                // });

                if (cloneInp === inpSch) {
                    const actualInpCert = clone.querySelectorAll('#actualInpCert');
                    actualInpCert.forEach((inp) => {
                        inp.id = `${inp.id}-${counterInp}`;
                    });
                };

                // // Remove button
                // const btnCreateRemove = document.createElement('button');
                // btnCreateRemove.classList.add('btn-remove', `btn-removal-${cloneSplitID}`);
                // // btnCreateRemove.setAttribute('id', `remove-${cloneSplitID}-${counterInp}`)
                // btnCreateRemove.type = 'button';
                // btnCreateRemove.textContent = 'Remove';
                // btnCreateRemove.addEventListener('click', () => {
                //   removeSchElement();
                // });

                // Title
                const title = document.createElement('h1');
                title.classList.add('text-[16px]', 'md:text-heading-6', 'font-bold');
                if (cloneInp === inpSch) {
                    title.textContent = `Education ${counterInp}`;
                } else if (cloneInp === inpExp) {
                    title.textContent = `Experience ${counterInp}`;
                } else {
                    console.warn('Other Method');
                }

                // Create a div for the title and remove button as flex\
                const divTitle = document.createElement('div');
                divTitle.classList.add('title-contents', 'support-title-contents');
                divTitle.appendChild(title);
                // divTitle.appendChild(btnCreateRemove);
                // Put the div before the first child
                clone.insertBefore(divTitle, clone.firstElementChild);

                // clone.insertBefore(title, clone.firstElementChild);
                // Put the remove button after the title
                // clone.insertBefore(btnCreateRemove, clone.firstElementChild.nextElementSibling);
                // clone.appendChild(btnCreateRemove);
            } else {
                console.log("ain't gonna happen lol")
            };
            console.log(counterInp);
        };

        // Alternate Remove button
        // const btnCreateRemove = document.createElement('button');
        // btnCreateRemove.classList.add('btn-remove');
        // // btnCreateRemove.setAttribute('id', `remove-${cloneSplitID}-${counterInp}`)
        // btnCreateRemove.type = 'button';
        // btnCreateRemove.textContent = 'Remove';
        // btnCreateRemove.addEventListener('click', () => {
        //   removeSchElement();
        // });

        // Function to remove the element

        btnRemSch.addEventListener('click', () => {
            const lastChild = parentInputSchool.lastChild
            if (counterSch != 1) {
                parentInputSchool.removeChild(lastChild);
                counterSch--;
            } else {
                console.log("Sch : Nuh uh")
            };
            console.log(counterSch);
            console.log('Counter for sch: ' + counterSch);
        });

        btnRemExp.addEventListener('click', () => {
            const lastChild = parentInputExperience.lastChild
            if (counterExp != 1) {
                parentInputExperience.removeChild(lastChild);
                counterExp--;
            } else {
                console.log('Exp : Nuh uh');
            }
        });

        btnRemSkill.addEventListener('click', () => {
            const lastChild = parentInputSkill.lastChild
            if (counterSkill != 1) {
                parentInputSkill.removeChild(lastChild);
                counterSkill--;
            } else {
                console.log('Skill : Nuh uh');
            }
        });

        btnRemLang.addEventListener('click', () => {
            const lastChild = parentInputLanguage.lastChild
            if (counterLang != 1) {
                parentInputLanguage.removeChild(lastChild);
                counterLang--;
            } else {
                console.log('Lang : Nuh uh');
            }
        });

        // Adds

        btnAddInpSch.addEventListener('click', () => {
            // Make a condition if this button is already clicked 4 times, then it will be disabled
            counterSch++;
            cloneElement(inpSch, parentInputSchool, counterSch);
            btnAddInpSch.classList.remove('hidden');
            console.log('Counter for sch: ' + counterSch);
        });

        btnAddInpExp.addEventListener('click', () => {
            counterExp++;
            cloneElement(inpExp, parentInputExperience, counterExp);
            btnAddInpExp.classList.remove('hidden')
            console.log('Counter for Exp: ' + counterExp);
        });

        btnAddInpSkill.addEventListener('click', () => {
            counterSkill++;
            cloneElement(inpSkill, parentInputSkill, counterSkill);
            btnAddInpSkill.classList.remove('hidden')
            console.log('Counter for Skill: ' + counterSkill);
        });

        btnAddInpLang.addEventListener('click', () => {
            counterLang++;
            cloneElement(inpLang, parentInputLanguage, counterLang);
            btnAddInpLang.classList.remove('hidden')
            console.log('Counter for Lang: ' + counterLang);
        });

        // Do a time loop to check if the counterSch is below 4, then the button will be enabled again
        setInterval(() => {
            // Schs
            if (counterSch < 4 || counterSch <= 1) {
                btnAddInpSch.classList.remove('disabled-btn');
                btnRemSch.classList.add('disabled-btn')
                // console.warn('warn remove hidden: ' + counterSch)
            } else {
                btnAddInpSch.classList.add('disabled-btn');
                // console.warn('warn added hidden: ' + counterSch)
            };
            if (counterSch > 4) {
                window.location.reload();
            } else if (counterSch === 4) {
                btnAddInpSch.setAttribute('disabled', '');
            } else {
                btnAddInpSch.removeAttribute('disabled');
            }
            if (counterSch > 1) {
                btnRemSch.classList.remove('disabled-btn')
            }

            // Exps
            if (counterExp < 4 || counterExp <= 1) {
                btnAddInpExp.classList.remove('disabled-btn');
                btnRemExp.classList.add('disabled-btn')
                // console.warn('warn remove hidden: ' + counterSch)
            } else {
                btnAddInpExp.classList.add('disabled-btn');
                // console.warn('warn added hidden: ' + counterSch)
            };
            if (counterExp > 4) {
                window.location.reload();
            } else if (counterExp === 4) {
                btnAddInpExp.setAttribute('disabled', '');
            } else {
                btnAddInpExp.removeAttribute('disabled');
            }
            if (counterExp > 1) {
                btnRemExp.classList.remove('disabled-btn')
            }

            // Skills
            if (counterSkill < 4 || counterSkill <= 1) {
                btnAddInpSkill.classList.remove('disabled-btn');
                btnRemSkill.classList.add('disabled-btn')
                // console.warn('warn remove hidden: ' + counterSch)
            };
            if (counterSkill > 1) {
                btnRemSkill.classList.remove('disabled-btn')
            };

            // Language
            if (counterLang < 4 || counterLang <= 1) {
                btnAddInpLang.classList.remove('disabled-btn');
                btnRemLang.classList.add('disabled-btn')
                // console.warn('warn remove hidden: ' + counterSch)
            };
            if (counterLang > 1) {
                btnRemLang.classList.remove('disabled-btn')
            };
        }, 100);


        function initializePage() {
            makeNavLinksSmooth();
            spyScrolling();
        }
    </script>
@endpush
