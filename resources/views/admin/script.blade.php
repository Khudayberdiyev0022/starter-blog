{{--@push('script')--}}
{{--  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">--}}
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>--}}
{{--  <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>--}}
{{--  <!-- markup -->--}}
{{--  <!-- summernote config -->--}}
{{--  <script>--}}
{{--      $(document).ready(function () {--}}
{{--          // Slug ajax from title--}}
{{--          $('#title').change(function (e) {--}}
{{--              // console.log(e.target.value)--}}
{{--              $.get('{{ route('slug') }}',--}}
{{--                  {'title': $(this).val()},--}}
{{--                  function (data) {--}}
{{--                      $('#slug').val(data.slug)--}}
{{--                  }--}}
{{--              )--}}
{{--          })--}}
{{--          // Slug ajax from title end--}}

{{--          // Define function to open filemanager window--}}
{{--          const lfm = function (options, cb) {--}}
{{--              const left = ($(window).width() / 2) - (900 / 2);--}}
{{--              const top = ($(window).height() / 2) - (600 / 2);--}}
{{--              const route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';--}}
{{--              window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', `width=900,height=600,top=+${top}+,left=+${left}`);--}}
{{--              window.SetUrl = cb;--}}
{{--          };--}}
{{--          // Define LFM summernote button--}}
{{--          const LFMButton = function (context) {--}}
{{--              const ui = $.summernote.ui;--}}
{{--              const button = ui.button({--}}
{{--                  contents: '<i class="note-icon-picture"></i> ',--}}
{{--                  tooltip: 'Insert image with filemanager',--}}
{{--                  click: function () {--}}

{{--                      lfm({type: 'image', prefix: '/filemanager'}, function (lfmItems, path) {--}}
{{--                          lfmItems.forEach(function (lfmItem) {--}}
{{--                              context.invoke('insertImage', lfmItem.url);--}}
{{--                          });--}}
{{--                      });--}}

{{--                  }--}}
{{--              });--}}
{{--              return button.render();--}}
{{--          };--}}

{{--          // Initialize summernote with LFM button in the popover button group--}}
{{--          // Please note that you can add this button to any other button group you'd like--}}
{{--          $('#summernote-editor').summernote({--}}
{{--              toolbar: [--}}
{{--                  ['style', ['style']],--}}
{{--                  ['font', ['bold', 'italic', 'underline', 'clear']],--}}
{{--                  ['fontname', ['fontname']],--}}
{{--                  ['color', ['color']],--}}
{{--                  ['para', ['ul', 'ol', 'paragraph']],--}}
{{--                  ['height', ['height']],--}}
{{--                  ['table', ['table']],--}}
{{--                  ['insert', ['link', 'lfm', 'hr']],--}}
{{--                  ['view', ['fullscreen', 'codeview']],--}}
{{--                  ['help', ['help']],--}}
{{--                  // ['popovers', ['lfm']],--}}
{{--              ],--}}
{{--              buttons: {--}}
{{--                  lfm: LFMButton--}}
{{--              }--}}
{{--          })--}}
{{--      });--}}
{{--  </script>--}}
{{--@endpush--}}
