@extends('backend.layouts.app')

@section('content')

<div id="editBannerModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">

    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeEditBannerModal()"></div>

    <div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="editBannerModalContent">

        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-5 border-b bg-slate-50">
            <h3 class="text-xl font-bold">Edit Banner</h3>
            <button onclick="closeEditBannerModal()">✖</button>
        </div>

        <!-- FORM -->
        <div class="p-6 max-h-[75vh] overflow-y-auto">

            <form id="editBannerForm" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Image -->
                <div>
                    <div class="relative w-full h-48 border-2 border-dashed rounded-2xl overflow-hidden cursor-pointer"
                        onclick="document.getElementById('editImageInput').click()">

                        <img id="editPreviewImage"
                            class="w-full h-full object-cover">

                        <div class="absolute inset-0 flex items-center justify-center bg-black/40 text-white">
                            Click to change image
                        </div>

                        <input type="file" name="image" id="editImageInput"
                            class="hidden"
                            onchange="previewEditImage(event)">
                    </div>
                </div>

                <!-- Title -->
                <input type="text" name="title" id="editTitle" class="w-full px-4 py-3 border rounded-xl">

                <!-- Subtitle -->
                <textarea name="subtitle" id="editSubtitle" class="w-full px-4 py-3 border rounded-xl"></textarea>

                <!-- Button -->
                <input type="text" name="button_text" id="editButtonText" class="w-full px-4 py-3 border rounded-xl">

                <input type="text" name="button_link" id="editButtonLink" class="w-full px-4 py-3 border rounded-xl">

                <input type="number" name="order" id="editOrder" class="w-full px-4 py-3 border rounded-xl">

                <select name="status" id="editStatus" class="w-full px-4 py-3 border rounded-xl">
                    <option value="active">Active</option>
                    <option value="draft">Draft</option>
                </select>

                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-xl">
                    Update Banner
                </button>

            </form>

        </div>
    </div>
</div>

<script>
function openEditBannerModal(id) {

    fetch('/banner/edit/' + id)
    .then(res => res.json())
    .then(data => {

        document.getElementById('editBannerForm').action = '/banner/update/' + id;

        document.getElementById('editTitle').value = data.title;
        document.getElementById('editSubtitle').value = data.subtitle;
        document.getElementById('editButtonText').value = data.button_text;
        document.getElementById('editButtonLink').value = data.button_link;
        document.getElementById('editOrder').value = data.order;
        document.getElementById('editStatus').value = data.status;

        document.getElementById('editPreviewImage').src = '/uploads/banners/' + data.image;

        document.getElementById('editBannerModal').classList.remove('opacity-0','pointer-events-none');
        document.getElementById('editBannerModalContent').classList.add('scale-100');

        document.body.style.overflow = 'hidden';
    });
}

function closeEditBannerModal() {
    document.getElementById('editBannerModal').classList.add('opacity-0','pointer-events-none');
    document.getElementById('editBannerModalContent').classList.remove('scale-100');
    document.body.style.overflow = 'auto';
}

function previewEditImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('editPreviewImage').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

@endsection