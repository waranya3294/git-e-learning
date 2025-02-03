<div class="container-fluid mt-4 mb-4">
    <div class="card shadow-sm rounded-1">
        <div class="card-body">
            <div style="color:#18B0BD">
                <h3 class="display-4"><i class="fa-regular fa-file"></i> ลงเนื้อหาบทเรียน</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col mt-3">
                    <label for="">ตั้งชื่อบทเรียน:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="description">เนื้อหาบทเรียน:<span class="text-danger">*</span></label>
                    <div>
                        <textarea id="tiny"></textarea>
                    </div>
                </div>
            </div>

            <hr class="divider">
            <div class="row">
                <div class="col text-end mb-3">
                    <button type="button" class="btn btn-success" id="save-btn">
                        <i class="fa-solid fa-floppy-disk"></i> บันทึก
                    </button>
                    <div class="btn btn-secondary" onclick="window.location.href='examform_maincontent.php'">ยกเลิก</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/xit6jhfuib4qtdnwba6inewnmyk72x2w0wxqdkd6kwxf6oan/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        branding: false,
        selector: 'textarea#tiny',
        plugins: 'image link media text preview  fullscreen lists fontsizeinput color textcolor',
        toolbar: 'undo redo | fontsizeinput fontsizeselect | image link media bold italic backcolor forecolor |\
        bullist numlist checklist | alignleft aligncenter alignright alignjustify preview fullscreen',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image media file',
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*,video/*'); // Accept both image and video files

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                });

                if (file.type.startsWith('image/')) {

                    reader.readAsDataURL(file);
                } else if (file.type.startsWith('video/')) {
                    reader.readAsDataURL(file);
                }
            });

            input.click();
        },
    });

    // Prevent Bootstrap dialog from blocking focusin
    document.addEventListener('focusin', (e) => {
        if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
            e.stopImmediatePropagation();
        }
    });

    document.getElementById('save-btn').addEventListener('click', () => {
        const title = document.querySelector('input[name="title"]').value;
        const content = tinymce.get('tiny').getContent();

        const data = {
            title: title,
            content: content
        };

        fetch('save_content.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset=UTF-8'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('บันทึกเนื้อหาสำเร็จ!');
                } else {
                    alert('ไม่สามารถบันทึกเนื้อหาได้.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('เกิดข้อผิดพลาดขณะบันทึกเนื้อหา.');
            });
    });
</script>