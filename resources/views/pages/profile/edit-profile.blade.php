@extends('layouts.dashboard')

@section('title', ' Edit Profile')

@section('content')

    <section class="bg-blue-5 flex justify-center py-8">
        <!-- profile biodata -->
        <section class="flex flex-col">

            <div class="bg-white p-12 rounded-lg shadow-md text-center w-64">

                <img src="../../assets/images/banner2.png" alt="Profile-Image"
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

            <div class="box-border py-4 px-8 mt-5 border bg-white rounded-lg shadow-md">

                <div class="flex flex-col">

                    <div class="flex-1">

                        <p
                            class="text-[16px] md:text-heading-5 xl:text-heading-6 2xl:text-sm font-semibold pb-4 mb-4 border-b-2 px-4">
                            Detail
                        </p>

                        <ul class="text-[14px] md:text-heading-5 xl:text-heading-6 2xl:text-sm">
                            <li class="li_prodit active"><a class="" href="#personal">Personal Info</a></li>
                            <li class="li_prodit"><a class="" href="#edu">Education History</a></li>
                            <li class="li_prodit"><a class="" href="#exp">Experiences</a></li>
                            <li class="li_prodit"><a class="" href="#skills">Skills</a></li>
                            <li class="li_prodit"><a class="" href="#idlanguage">Languages</a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>

        {{-- biodata section --}}
        <section class="flex flex-col w-auto min-h-screen ">

            <div class="flex flex-1 px-4">

                <div class="flex flex-col w-full ">

                    <!-- Form Edit Profile -->
                    <section id="personal" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile ">
                        <div class="text-[16px] md:text-heading-4 font-bold pb-6 mb-6 border-b-2">Personal Information</div>

                        <div>

                            <form action="" class="flex flex-col">

                                <div class="edit-inside-1">

                                    <div class="edit-inside-2">
                                        <label for="fullName" class="edt-label">Full name</label>
                                        <input id="fullName" type="text" class="edt-inp"
                                            placeholder="Input Your Full Name">
                                    </div>

                                    <div class="edit-inside-3">
                                        <label for="skill" class="edt-label">Expertise</label>
                                        <input id="skill" type="text" class="edt-inp"
                                            placeholder="You are expert at..">
                                    </div>

                                </div>

                                <div class="flex w-full flex-col mb-4">
                                    <label for="desc" class="edt-label">Bio</label>
                                    <textarea name="desc" id="desc" class="edt-inp" rows="5"
                                        style="resize: none; line-height: 1; padding: 8px 12px;"></textarea>
                                </div>

                                <div class="edit-inside-1">

                                    <div class="edit-inside-2">
                                        <label for="email-acc" class="edt-label">Email Acc</label>
                                        <input id="email-acc" type="email" class="edt-inp" placeholder="your@example.com">
                                    </div>

                                    <div class="edit-inside-3">
                                        <label for="email-cont" class="edt-label">Contact Email</label>
                                        <input id="email-cont" type="email" class="edt-inp"
                                            placeholder="your@example.com">
                                    </div>

                                </div>

                                <div class="edit-inside-1">

                                    <div class="edit-inside-2">
                                        <label for="phone" class="edt-label">Phone Number</label>
                                        <input id="phone" type="number" class="edt-inp" placeholder="081234567890">
                                    </div>

                                    <div class="edit-inside-3">
                                        <label for="social" class="edt-label">Social Acc</label>
                                        <input id="social" type="email" class="edt-inp"
                                            placeholder="e.g. Linkedin link, Github, or etc.">
                                    </div>

                                </div>

                                <div class="edit-inside-1">

                                    <div class="edit-inside-2">
                                        <label for="pronoun" class="edt-label">Gender</label>

                                        <select name="pronoun" class="edt-inp h-full" id="pronoun"
                                            style="line-height: normal;">
                                            <option value="" selected disabled>Choose your gender</option>
                                            <option value="pria">Male</option>
                                            <option value="wanita">Female</option>
                                        </select>

                                    </div>

                                    <div class="edit-inside-3">
                                        <label for="dob" class="edt-label">Birth Date</label>
                                        <input id="dob" type="date" class="edt-inp">
                                    </div>

                                </div>

                                <div class="flex w-full mb-4">

                                    <div class="flex flex-1 flex-col mb-4 md:mb-0 pr-4">
                                        <label for="address" class="edt-label">Address</label>
                                        <input id="address" type="text" class="edt-inp"
                                            placeholder="Your home address">
                                    </div>

                                    <div class="flex flex-1 flex-col mb-4 md:mb-0 pl-4">
                                        <label for="hobby" class="edt-label">Hobby</label>
                                        <input id="hobby" type="email" class="edt-inp"
                                            placeholder="Write your hobby or you can leave it behind...">
                                    </div>

                                </div>

                            </form>

                        </div>

                    </section>

                    <!-- Form Edit education -->
                    <section id="edu" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                        <div class="titlesz md:text-heading-4">Education</div>

                        <div class="inp-profile inps hidden">

                            <form id="formInpSch" action="">

                                <div id="parentInpSch">

                                    <div id="inpSch-1">

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="schoolName" class="edt-label">School Name</label>
                                                <input id="schoolName" type="text" class="edt-inp"
                                                    placeholder="Your School name">
                                            </div>
                                            <div class="edit-inside-3">
                                                <label for="majorName" class="edt-label">Program/Major</label>
                                                <input id="majorName" type="text" class="edt-inp"
                                                    placeholder="What major did you pick in the school">
                                            </div>
                                        </div>

                                        <div class="edit-inside-1">

                                            <div class="edit-inside-2">

                                                <label for="whatDegree" class="edt-label">School's Degree</label>
                                                <select id="whatDegree" name="degreeOptions"
                                                    class="edt-inp h-full leading-normal">
                                                    <option value="" selected disabled>Which is your degree in this
                                                        school</option>
                                                    <option value="junior">Junior High School</option>
                                                    <option value="senior">Senior High School</option>
                                                    <option value="diploma">Diploma</option>
                                                    <option value="bachelor">Bachelor</option>
                                                    <option value="master">Master</option>
                                                </select>

                                            </div>

                                            <div class="edit-inside-3">

                                                <label for="stSchool" class="edt-label">Enters School date</label>
                                                <input id="stSchool" type="date" class="edt-inp">

                                            </div>

                                        </div>

                                        <div class="edit-inside-1">

                                            <div class="edit-inside-2">

                                                <label for="adSchool" class="edt-label">School Address</label>
                                                <input id="adSchool" type="text" class="edt-inp"
                                                    placeholder="Your school address">

                                            </div>
                                            <div class="edit-inside-3">

                                                <label for="grSchool" class="edt-label">Graduate date</label>
                                                <input id="grSchool" type="date" class="edt-inp">

                                            </div>
                                        </div>

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="citySch" class="edt-label">City</label>
                                                <input id="citySch" class="edt-inp" type="text"
                                                    placeholder="School's City name">
                                            </div>
                                            <div class="edit-inside-3">
                                                <label for="provSch" class="edt-label">Province</label>
                                                <input id="provSch" class="edt-inp" type="text"
                                                    placeholder="School's Province name">
                                            </div>
                                        </div>

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="zipSch" class="edt-label">Zipcode</label>
                                                <input id="zipSch" class="edt-inp" type="number"
                                                    placeholder="Zipcode">
                                            </div>

                                            <div class="edit-inside-3">
                                                <label for="actualInpCert" class="edt-label">School's diploma</label>
                                                <div
                                                    class="flex h-full items-center leading-normal text-[14px] md:text-heading-5 lg:text-sm-1 cursor-pointer">
                                                    <input id="actualInpCert"
                                                        class="flex bg-blue-500 text-white h-full w-full px-[10px] py-[6px] text-center items-center rounded mr-[8px] cursor-pointer"
                                                        type="file">
                                                    <!-- <input id="actualInpCert" type="file" hidden> -->
                                                    <!-- <label id="certSch"
                                                                                                                                                                                                                                                                              class="flex font-bold bg-blue-500 text-white h-full w-fit px-[10px] py-[6px] text-center items-center rounded mr-[8px] cursor-pointer"
                                                                                                                                                                                                                                                                              for="actualInpCert">Choose file</label>
                                                                                                                                                                                                                                                                              <span id="fileName" class="sup-filename text-[14px] md:text-heading-5 lg:text-sm-1">No File Chosen</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <button id="btnRemoveInpSch" type="button" class="btn-remove mb-1">Remove</button> -->
                                <div class="flex flex-row">
                                    <button id="btnRemSch" type="button" class="btn-remove">Remove -</button>
                                    <button id="btnAddInpSch" type="button" class="btn-plus mx-2">Add +</button>
                                    <button id="btnSubmitSch" type="submit" class="btn-submit">Submit</button>
                                </div>

                            </form>

                        </div>

                        <button type="button" class="btn-add collapses">Tambah +</button>

                    </section>

                    <!-- Form Edit experience -->
                    <section id="exp" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                        <div class="titlesz md:text-heading-4">Experience</div>

                        <div class="inp-exp inps hidden">

                            <form id="formInpExp" action="">

                                <div id="parentInpExp">
                                    <div id="inpExp-1">
                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="institName" class="edt-label">Company name</label>
                                                <input id="institName" type="text" class="edt-inp"
                                                    placeholder="Input the name here...">
                                            </div>

                                            <div class="edit-inside-3">
                                                <label for="expBase" class="edt-label">Work Based on</label>
                                                <select id="expBase" name="baseOptions"
                                                    class="edt-inp h-full leading-normal">
                                                    <option value="" selected disabled>Choose one</option>
                                                    <option value="hotel">Hotel</option>
                                                    <option value="cruise">Cruise Ship</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="expPos" class="edt-label">Position</label>
                                                <input type="text" id="expPos" class="edt-inp"
                                                    placeholder="Your job position">
                                            </div>

                                            <div class="edit-inside-3">
                                                <label for="expJobTitle" class="edt-label">Job Title</label>
                                                <input type="text" id="expJobTitle" class="edt-inp"
                                                    placeholder="The job title">
                                            </div>
                                        </div>

                                        <div class="edit-inside-1">

                                            <div class="edit-inside-2">
                                                <label for="expJobDesc" class="edt-label">Job Description</label>
                                                <input type="text" id="expJobDesc" class="edt-inp"
                                                    placeholder="The job description">
                                            </div>
                                            <div class="edit-inside-3">
                                                <label for="expStart" class="edt-label">Start job</label>
                                                <input type="date" id="expStart" class="edt-inp" placeholder="">
                                            </div>

                                        </div>

                                        <div class="edit-inside-1">

                                            <div class="edit-inside-2">
                                                <label for="expEnd" class="edt-label">End job</label>
                                                <input type="date" id="expEnd" class="edt-inp" placeholder="">
                                            </div>
                                            <div class="edit-inside-3">
                                                <label for="expAddress" class="edt-label">Address</label>
                                                <input type="text" id="expAddress" class="edt-inp"
                                                    placeholder="Company address">
                                            </div>

                                        </div>

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="expCity" class="edt-label">City</label>
                                                <input type="text" id="expCity" class="edt-inp"
                                                    placeholder="City name">
                                            </div>

                                            <div class="edit-inside-3">
                                                <label for="expProvince" class="edt-label">Provinsi</label>
                                                <input type="text" id="expProvince" class="edt-inp"
                                                    placeholder="Province name">
                                            </div>

                                        </div>

                                        <div class="edit-inside-1">
                                            <div class="edit-inside-2">
                                                <label for="expCountry" class="edt-label">Country</label>
                                                <input type="text" id="expCountry" class="edt-inp"
                                                    placeholder="Company's country">
                                            </div>

                                            <div class="edit-inside-3">
                                                <label for="expZip" class="edt-label">Zip Code</label>
                                                <input type="number" id="expZip" class="edt-inp"
                                                    placeholder="Zip Code">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="flex flex-row">
                                    <button id="btnRemExp" type="button" class="btn-remove">Remove -</button>
                                    <button id="btnAddInpExp" type="button" class="btn-plus mx-2">Add +</button>
                                    <button id="btnSubmitExp" type="submit" class="btn-submit">Submit</button>
                                </div>

                            </form>

                        </div>

                        <button type="button" class="btn-add collapses">Tambah +</button>

                    </section>

                    <!-- Form Edit skill -->
                    <section id="skills" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                        <div class="titlesz md:text-heading-4">Skills</div>

                        <div class="inp-skill inps">

                            <form id="formInpSkill" action="">

                                <div id="parentInpSkill">

                                    <div id="inpSkill-1">
                                        <div class="edit-inside-1">
                                            <div class="flex flex-1 flex-col mb-4 md:mb-0">
                                                <label for="addInputSkill" class="edt-label"></label>
                                                <input id="addInputSkill" type="text" class="edt-inp"
                                                    placeholder="Add your skill...">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex flex-row">

                                    <button id="btnRemSkill" type="button" class="btn-remove">Remove -</button>
                                    <button id="btnAddInpSkill" type="button" class="btn-plus mx-2">Add +</button>
                                    <button id="btnSubmitSkill" type="submit" class="btn-submit">Submit</button>

                                </div>

                            </form>
                        </div>
                        <!-- <button type="button" class="btn-add collapses">Tambah +</button> -->
                    </section>

                    <!-- Form Edit langguange -->
                    <section id="idlanguage" class="rounded-lg shadow-md bg-white p-8 border mb-8 content-profile">

                        <div class="titlesz md:text-heading-4">Languages</div>

                        <div class="inp-langs inps">

                            <form id="formInpLangs" action="">

                                <div id="parentInpLang">
                                    <div id="inpLang-1">
                                        <div class="edit-inside-1">
                                            <div class="flex flex-1 flex-col mb-4 md:mb-0">
                                                <label for="addInputLang" class="edt-label"></label>
                                                <input id="addInputLang" type="text" class="edt-inp"
                                                    placeholder="Add your Language...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-row">
                                    <button id="btnRemLang" type="button" class="btn-remove">Remove -</button>
                                    <button id="btnAddInpLang" type="button" class="btn-plus mx-2">Add +</button>
                                    <button id="btnSubmitLang" type="submit" class="btn-submit">Submit</button>
                                </div>

                            </form>
                        </div>
                        <!-- <button type="button" class="btn-add collapses">Tambah +</button> -->
                    </section>

                </div>
            </div>

        </section>

    </section>



@endsection
