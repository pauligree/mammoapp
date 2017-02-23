//copio l'html del modal nelle variabili da mostrare
          var glossario = $('#modal-glossario').html();
          var tree_sitemap = $('#modal-tree-sitemap').html();
          var modal_saperne = $('#modal-saperne').html();
          var modal_licenza = $('#modal-licenza').html();
          var modal_funziona = $('#modal-funziona').html();
          var modal_disclaimer = $('#modal-disclaimer').html();

          $('#open-modal-glossario').click(function (e) {
            e.preventDefault();
            showDialog({
              text: glossario,
              positive: {
                title: 'Chiudi'
              }
            });
          });

          $('#open-come-funziona').click(function () {
            showDialog({
              text: modal_funziona 
            });
          });

          $('#open-tree-sitemap').click(function (e) {
            e.preventDefault();
            showDialog({
              text: tree_sitemap
            });
          });

          $('#open-saperne').click(function (e) {
            e.preventDefault();
            showDialog({
              text: modal_saperne
            });
          });

          $('#open-licenza').click(function (e) {
            e.preventDefault();
            showDialog({
              text: modal_licenza
            });
          });

          $('#open-funziona').click(function (e) {
            e.preventDefault();
            showDialog({
              text: modal_funziona
            });
          });

          $('#open-disclaimer').click(function (e) {
            e.preventDefault();
            showDialog({
              text: modal_disclaimer
            });
          });