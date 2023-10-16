<x-app>
    <x-slot:title>
        User | Farmer-Details
    </x-slot:title>

    <x-admin.sidebar type="managed farmers"/>
    <div class="w-full min-h-screen overflow-hidden">
        <div class="grid w-full  px-5 bg-green-700">
            <div class="my-3 px-5 text-white flex flex-col sm:flex-row justify-between gap-4">
                <x-admin.goBack/>
                <div class="flex items-center justify-start sm:justify-between gap-3">
                    <div class="relative">
                        <img src="{{asset('images/farmer-3.png')}}" class="max-w-[46px] max-h-[46px] rounded-full bg-gray-300 border" alt="">
                        <img onclick="toggleDropDown()" src="{{asset('images/icons/update.png')}}" class="h-[20px] absolute bg-white rounded-full border bottom-0 right-0 cursor-pointer hover:bg-green-200" alt="">
                        <div  id="dropdownTarget" class="nav">
                            <ul class="w-full">
                                <li class="flex  cursor-pointer items-center justify-center gap-2 py-1 hover:bg-slate-200">
                                    <img src="{{asset('images/icons/delete.png')}}" class="h-[20px] w-[20px]" alt="">
                                    <p class="text-center text-slate-700 my-1 font-semibold">DELETE</p>
                                </li>
                                <li class="flex items-center  cursor-pointer justify-center gap-2 py-1 hover:bg-slate-200">
                                    <img src="{{asset('images/icons/edit.png')}}" class="h-[15px] w-[15px]" alt="">
                                    <p class="text-center text-slate-700 my-1 font-semibold ">UPDATE</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-bold text-2xl">{{$personalInformation->Surname}}</h2>
                        <div class="flex gap-2 items-center">
                            <p class=" font-semibold">RSBSA No.</p>
                            <p class="text-sm">{{$personalInformation->RSBSA_No}}</p>
                        </div>
                    </div>
                </div>
            </div>
            

            
            <div class="w-full grid grid-cols-1 sm:grid-cols-4 py-1">
                <a href="{{route('admin.farmerDetails', ['personalInformation' => $personalInformation, 'currentRoute' => 'personal'])}}" class="{{$currentRoute == 'personal' ?  'mx-auto px-2 py-1 rounded text-white cursor-pointer  bg-green-600' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Area Information</a>
                <a href="{{route('admin.farmerDetails', ['personalInformation' => $personalInformation, 'currentRoute' => 'livestock'])}}" class="{{$currentRoute == 'livestock' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Livestock Information</a>
                <a href="{{route('admin.farmerDetails', ['personalInformation' => $personalInformation, 'currentRoute' => 'poultry'])}}" class="{{$currentRoute == 'poultry' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">Poultry Information</a>
                <a href="{{route('admin.farmerDetails', ['personalInformation' => $personalInformation, 'currentRoute' => 'machinery'])}}" class="{{$currentRoute == 'machinery' ?  'mx-auto px-2 py-1 rounded text-white bg-green-600 cursor-pointer' : 'mx-auto px-2 py-1 rounded text-white hover:bg-green-600  cursor-pointer' }}">machinery Information</a>
            </div>
        </div>





        {{-- personal information  --}}

        <div class="{{$currentRoute == 'personal' ? 'flex flex-col w-[100%,900px] h-[500px] p-5 overflow-x-auto' : 'hidden'}}">
            <table class="w-[700px] sm:w-full flex flex-col shadow-md border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 grid grid-cols-2 relative  py-2">
                        <div class="flex items-center gap-3 cursor-pointer">
                            <img src="{{asset('images/icons/plus.png')}}" class="hover:bg-green-200 w-[25px] h-[25px] border bg-slate-100 rounded-full p-1" alt=""> Add Area
                        </div>
                        <input class="px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-full" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-10 text-[12px] mt-5">
                        <div>Area</div>
                        <div>Lot number</div>
                        <div>Hectare</div>
                        <div>Address</div>
                        <div>Geotag</div>
                        <div>Farm type</div>
                        <div>Ownership</div>
                        <div>Name of Owner if rented</div>
                        <div>Owner Address</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-10 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="grid grid-cols-2 gap-2">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


        {{-- live stack information  --}}

        <div class="{{$currentRoute == 'livestock' ? 'flex flex-col w-[100%,900px] h-[500px] p-5 overflow-x-auto' : 'hidden'}}">
            <table class="w-[700px] sm:w-full flex flex-col shadow-md border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 grid grid-cols-2 relative  py-2">
                        <div class="flex items-center gap-3 cursor-pointer">
                            <img src="{{asset('images/icons/plus.png')}}" class="hover:bg-green-200 w-[25px] h-[25px] border bg-slate-100 rounded-full p-1" alt=""> Add livestock
                        </div>
                        <input class="px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-full" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-3 text-[12px] mt-5">
                        <div>Animal Name</div>
                        <div>Gender</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ($properties as $livestock)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-3 w-full">
                    <td class="text-center">{{$livestock->LSAnimals}}</td>
                    <td class="text-center">{{$livestock->Sex_LS}}</td>
                    <td class="flex items-center justify-center gap-4">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <form action="{{ route('liveStockInformation.destroy', ['livestock' => $livestock]) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit">
                                <img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt="">
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>


        {{-- Pultry Inforamtion --}}

        <div class="{{$currentRoute == 'poultry' ? 'flex flex-col w-[100%,900px] h-[500px] p-5 overflow-x-auto' : 'hidden'}}">
            <table class="w-[700px] sm:w-full flex flex-col shadow-md border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 grid grid-cols-2 relative  py-2">
                        <div class="flex items-center gap-3 cursor-pointer">
                            <img src="{{asset('images/icons/plus.png')}}" class="hover:bg-green-200 w-[25px] h-[25px] border bg-slate-100 rounded-full p-1" alt=""> Add Poultry
                        </div>
                        <input class="px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-full" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-3 text-[12px] mt-5">
                        <div>Animal Name</div>
                        <div>Quality</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-3 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="flex items-center justify-around">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        {{-- machinery information  --}}

        <div class="{{$currentRoute == 'machinery' ? 'flex flex-col w-[100%,900px] h-[500px] p-5 overflow-x-auto' : 'hidden'}}">
            <table class="w-[700px] sm:w-full flex flex-col shadow-md border-2 rounded">
                <tr class="grid grid-cols-1 py-2 bg-green-700 text-white w-full">
                    <th class="w-full px-3 grid grid-cols-2 relative  py-2">
                        <div class="flex items-center gap-3 cursor-pointer">
                            <img src="{{asset('images/icons/plus.png')}}" class="hover:bg-green-200 w-[25px] h-[25px] border bg-slate-100 rounded-full p-1" alt=""> Add machinery
                        </div>
                        <input class="px-3 py-1 bg-slate-100 rounded outline-0 text-ms text-slate-800 w-full" placeholder="Search..." type="text">
                    </th>
                    <th class="grid grid-cols-5 text-[12px] mt-5">
                        <div>Machine Name</div>
                        <div>Purchased</div>
                        <div>Grant</div>
                        <div>Use of machinery</div>
                        <div>Operation</div>
                    </th>
                </tr>
                @foreach ([1,2,3,4] as $item)
                    
                <tr class="grid py-1 odd:bg-slate-200 grid-cols-5 w-full">
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="text-center">lorem</td>
                    <td class="grid grid-cols-2 gap-2">
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/update.png')}}" alt=""></div>
                        <div><img class="max-w-[34px] p-1 hover:bg-green-300/50 rounded-full" src="{{asset('images/icons/delete.png')}}" alt=""></div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</x-app>

<script>
    const dropDownTarget = document.getElementById("dropdownTarget")

    const toggleDropDown = ()=>{
        if(dropDownTarget){
            dropDownTarget.classList.toggle("navShow");
        }
    }
</script>

