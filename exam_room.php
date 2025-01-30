<form action="create-room.php" method="POST">
    <div class="container mt-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="" style="color: #18B0BD;">
                    <h1 class="display-4"> สร้างห้องเข้าสอบ</h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name">ชื่อห้องสอบ:<spen class="text-danger">*</spen></label>
                                    <input type="text" name="text" id="name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-12 mt-3 mb-3">
                                        <label for="description">คำอธิบายรายวิชา:<span class="text-danger">*</span></label>
                                        <div>
                                            <textarea id="tiny"></textarea>
                                        </div>

                                    </div>
                                </div>

                                <label for="datetimes">ระยะเวลาเปิดห้องสอบ:<spen class="text-danger">*</spen></label>
                                <div class="input-group mb-5">
                                    <input type="text" id="datetimes" name="datetimes" class="form-control" aria-describedby="exam_starttime_endtime">
                                    <span class="input-group-text" id="exam_starttime_endtime">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                
                <div class="row mb-3">
                    <div class="col text-end">
                        <div class="btn btn-success" onclick="window.location.href='room_maincontent.php'">
                            <i class="fa-solid fa-floppy-disk"></i> บันทึก
                        </div>
                        <div class="btn btn-secondary" onclick="window.location.href='room_maincontent.php'">ยกเลิก</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.tiny.cloud/1/xit6jhfuib4qtdnwba6inewnmyk72x2w0wxqdkd6kwxf6oan/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>



<script>
    tinymce.init({
        branding: false,
        selector: 'textarea#tiny',
        plugins: 'image link media table  preview  fullscreen lists fontsizeinput color textcolor',
        toolbar: 'undo redo | fontsizeinput fontsizeselect | image link media  bold italic backcolor forecolor |\
             bullist numlist checklist table | alignleft aligncenter alignright alignjustify preview fullscreen',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image media file',
        media_live_embeds: true,
        media_url_resolver: (data, resolve) => {
            if (data.url.includes('youtube.com') || data.url.includes('vimeo.com')) {
                const embedHtml = `<iframe src="${data.url}" width="400" height="400" ></iframe>`;
                resolve({
                    html: embedHtml
                });
            } else {
                resolve({
                    html: ''
                });
            }
        },
        file_picker_callback: (cb, value, meta) => {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            if (meta.filetype === 'image') {
                input.setAttribute('accept', 'image/*');
            } else if (meta.filetype === 'media') {
                input.setAttribute('accept', 'video/*');
            } else if (meta.filetype === 'file') {
                input.setAttribute('accept', '.pdf,.doc,.docx');
            }

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.addEventListener('load', () => {
                    const id = 'blobid' + (new Date()).getTime();
                    const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    const base64 = reader.result.split(',')[1];
                    const blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });

                    if (meta.filetype === 'file') {
                        if (file.name.endsWith('.doc') || file.name.endsWith('.docx')) {
                            tinymce.activeEditor.setContent(reader.result);
                        } else if (file.name.endsWith('.pdf')) {
                            const embedHtml = `<embed src="${reader.result}" type="application/pdf" width="100%" height="600px" />`;
                            tinymce.activeEditor.setContent(embedHtml);
                        } else if (file.type.startsWith('image/')) {
                            const embedHtml = `<img src="${reader.result}" alt="${file.name}" />`;
                            tinymce.activeEditor.setContent(embedHtml);
                        } else if (file.type.startsWith('video/')) {
                            const embedHtml = `<video controls><source src="${reader.result}" type="${file.type}"></video>`;
                            tinymce.activeEditor.setContent(embedHtml);
                        }
                    }
                });
                reader.readAsDataURL(file);
            });

            input.click();
        },
        importword: {
            images: true,
            videos: true,
            pdfs: true
        }
    });

    // Prevent Bootstrap dialog from blocking focusin
    document.addEventListener('focusin', (e) => {
        if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
            e.stopImmediatePropagation();
        }
    });

    document.getElementById('save-btn').addEventListener('click', () => {
        const content = tinymce.get('tiny').getContent();
        const jsonContent = JSON.stringify({
            content: content
        });

        fetch('save_content.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json; charset=UTF-8'
                },
                body: jsonContent
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });


    $(function() {
        $('input[name="datetimes"]').daterangepicker({
            timePicker24Hour: true,
            timePicker: true,
            autoUpdateInput: false, // ป้องกันการอัปเดตค่าอัตโนมัติในอินพุต
            locale: {
                format: 'DD MMM YYYY HH:mm ',
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD MMM YYYY HH:mm') + ' - ' + picker.endDate.format('DD MMM YYYY HH:mm'));
        });

        $('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val(''); // เคลียร์ค่าถ้าผู้ใช้กดปุ่ม Clear
        });

    });

</script>