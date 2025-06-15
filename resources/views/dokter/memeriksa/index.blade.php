<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-900">{{ __('Memeriksa Pasien') }}</h2>
                        <div>
                            @if (session('status') === 'memeriksa-created')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Created.') }}</p>
                            @endif
                        </div>
                    </header>

                    <table class="table mt-6 overflow-hidden rounded table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No Urut</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasiens as $pasien)
                            <tr>
                                <th scope="row" class="align-middle text-start">{{ $janjiPeriksa->antrian}}</th>
                                <td class="align-middle text-start">{{ $janjiPeriksa->pasien->nama }}</td>
                                <td class="align-middle text-start">{{ $janjiPeriksa->keluhan }}</td>
                                <td class="align-middle text-start">
                                    @if(is_null($janjiPeriksa->periksa))
                                    <a href="" class="btn btn-primary btn-sm">Periksa</a>
                                    @else
                                    <a href="" class="btn btn-secondary btn-sm">Edit</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </section>
                </div>
            </div>
        </div>
    </div>  
</x-app-layout>
                                       