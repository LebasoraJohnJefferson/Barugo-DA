<x-app>
    <x-slot:title>
        Admin | Farmer
    </x-slot:title>

    <x-admin.sidebar type="managed farmers"/>


    <section class="w-full min-h-screen p-5 overflow-y-auto">
        <div class=" my-3">
            <h2 class="font-bold text-2xl">Farmers Details</h2>
            <p class="text-sm">Approval and Inforamtion About the farmers.</p>
        </div>
        <section class="w-[100%,900px] h-[500px] mx-auto overflow-x-auto bg-white rounded-lg">
            <table class="w-full mt-5 text-center">
                <thead>
                    <tr >
                        <th class="">RSBSA No.</th>
                        <th class="">Surname</th>
                        <th class="">Address</th>
                        <th class="">Mobile No.</th>
                        <th class="">Main Livelihood</th>
                        <th class="">Status</th>
                        <th class="">Operation</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($PersonalInformations as $PersonalInformation)
                        <tr class="pt-10 odd:bg-slate-200">
                            <td>{{$PersonalInformation->RSBSA_No}}</td>
                            <td>{{$PersonalInformation->Surname}}</td>
                            <td>{{$PersonalInformation->Address}}</td>
                            <td>{{$PersonalInformation->Mobile_No}}</td>
                            <td>{{$PersonalInformation->Main_livelihood}}</td>
                            <td class="{{ $PersonalInformation->is_approved ? "text-green-500 font-bold p-1 rounded h-fit w-fit" : "text-red-500 font-bold p-1 rounded h-fit w-fit"}}">{{ $PersonalInformation->is_approved ? "Active" : "In-Active"}}</td>
                            <td class="flex items-center justify-center gap-3">
                                <form class="w-full" action="{{ route('admin.approved', ['personalInformation' => $PersonalInformation]) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="w-full">
                                        <input class="bg-[#679f69] w-full px-3 py-1 rounded-lg text-white font-bold cursor-pointer @if($PersonalInformation->is_approved) hidden @endif" type="submit" value="Approved">
                                    </div>
                                </form>
                                <form class="w-full" action="{{ route('admin.delete', ['personalInformation' => $PersonalInformation]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="w-full">
                                        <input class="bg-red-500 w-full px-3 py-1 rounded-lg text-white font-bold cursor-pointer" type="submit" value="Delete">
                                    </div>
                                </form>
                            </td>		
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>
</x-app>