@extends('admin.layouts.app')
@section('konten')
    <div class="container">
        <h4>Tambah Data Lokasi</h4>
        <div class="card">
            <div class="card-header">
                Tambah data
            </div>
            <div class="card-body">

                <form action="{{ url('dashboard/lokasi/store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <input id="nama" name="nama" type="text" class="form-control col-8">
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>

                        <input id="alamat" name="alamat" type="text" class="form-control col-8">
                    </div>

                    <div class="form-group row">
                        <label for="province" class="col-4">Provinsi</label>
                        <select name="province" id="province" class="form-control col-8">
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-4">Kota/Kab</label>
                        <select name="city" id="city" class="form-control col-8">
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="district" class="col-4">Kecamatan</label>
                        <select name="district" id="district" class="form-control col-8">
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="village" class="col-4">Kelurahan</label>
                        <select name="village" id="village" class="form-control col-8">
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const provinceSelect = document.querySelector('#province');
            const citySelect = document.querySelector('#city');
            const districtSelect = document.querySelector('#district');
            const villageSelect = document.querySelector('#village');

            const getProvince = async () => {
                try {
                    const response = await fetch('/api/province');
                    const data = await response.json();
                    populateProvinceSelect(data);
                } catch (error) {
                    console.error('Error fetching province data:', error);
                }
            }

            const populateProvinceSelect = (data) => {
                provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>';
                data.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.id;
                    option.textContent = province.name;
                    provinceSelect.appendChild(option);
                });
            }
            getProvince();


            const getCity = async (id) => {
                try {
                    const response = await fetch(`/api/city/province/${id}`);
                    const data = await response.json();
                    populateCitySelect(data);
                } catch (error) {
                    console.error('Error fetching province data:', error);
                }
            }
            const populateCitySelect = (data) => {
                citySelect.innerHTML = '<option value="">Pilih Kota</option>';
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            }
            const getDistrict = async (id) => {
                try {
                    const response = await fetch(`/api/district/city/${id}`);
                    const data = await response.json();
                    populateDistrictSelect(data);
                } catch (error) {
                    console.error('Error fetching province data:', error);
                }
            }
            const populateDistrictSelect = (data) => {
                districtSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    districtSelect.appendChild(option);
                });
            }
            const getVillage = async (id) => {
                try {
                    const response = await fetch(`/api/village/district/${id}`);
                    const data = await response.json();
                    populateVillageSelect(data);
                } catch (error) {
                    console.error('Error fetching province data:', error);
                }
            }
            const populateVillageSelect = (data) => {
                villageSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.name;
                    villageSelect.appendChild(option);
                });
            }


            document.querySelector('#province').addEventListener('change', function() {
                getCity(provinceSelect.value);
            });
            document.querySelector('#city').addEventListener('change', function() {
                getDistrict(citySelect.value);
            });
            document.querySelector('#district').addEventListener('change', function() {
                getVillage(districtSelect.value);
            });
        });
    </script>
@endsection
