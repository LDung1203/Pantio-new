const decreaseBtn = document.getElementById("decrease");
                            const increaseBtn = document.getElementById("increase");
                            const quantityInput = document.getElementById("quantity");

                            let quantity = 1; // Giá trị mặc định ban đầu

                            // Tăng số lượng
                            increaseBtn.addEventListener("click", function () {
                                quantity++;
                                quantityInput.value = quantity;
                                updateButtons();
                            });

                            // Giảm số lượng
                            decreaseBtn.addEventListener("click", function () {
                                if (quantity > 1) { // Đảm bảo không giảm dưới 1
                                    quantity--;
                                    quantityInput.value = quantity;
                                    updateButtons();
                                }
                            });

                            // Cập nhật trạng thái nút
                            function updateButtons() {
                                decreaseBtn.disabled = quantity <= 1; // Vô hiệu hóa nút "-" nếu số lượng <= 1
                            }

                            // Khởi tạo trạng thái nút
                            updateButtons();