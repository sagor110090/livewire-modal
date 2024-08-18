 
  document.addEventListener('alpine:init', () => {
    Alpine.data("loader", () => ({
      isLoading: false,
      loadingStart() {
        this.isLoading = true;
      },
      loadingStop() {
        this.isLoading = false;
      },
      init() {
        Livewire.hook("commit", ({ component, commit, respond, succeed, fail }) => {
          // Start loader when message is sent
          this.loadingStart();

          // Stop loader on success
          succeed(({ snapshot, effect }) => {
            queueMicrotask(() => {
              this.loadingStop();
            });
          });

          // Stop loader on failure
          fail(() => {
            this.loadingStop();
          });
        });
      }
    }));
  });

  document.addEventListener('DOMContentLoaded', () => {
    // Initialize the loader component globally on the body tag
    const loaderInstance = document.body.setAttribute('x-data', 'loader');
  });
 
