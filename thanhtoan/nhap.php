<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form submit="../php/order.php" method="POST" >
    <!-- Các dropdown -->
    <select id="tinh_tp" name="tinh_tp" required></select>
    <select id="quan_huyen" name="quan_huyen" required disabled></select>
    <select id="phuong_xa" name="phuong_xa" required disabled></select>

    <!-- Các trường input ẩn để lưu tên -->
    <input type="hidden" id="selected_province_name" name="tinh_tp_name">
    <input type="hidden" id="selected_district_name" name="quan_huyen_name">
    <input type="hidden" id="selected_ward_name" name="phuong_xa_name">

    <script>
        // Gọi API lấy danh sách tỉnh/thành phố
        fetch('https://provinces.open-api.vn/api/p/')
            .then(response => response.json())
            .then(data => {
                const tinhTpDropdown = document.getElementById('tinh_tp');
                data.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.code; // Giá trị là mã tỉnh
                    option.setAttribute('data-name', province.name); // Lưu tên tỉnh
                    option.textContent = province.name; // Hiển thị tên tỉnh
                    tinhTpDropdown.appendChild(option);
                });
            })
            .catch(error => console.error('Lỗi khi tải danh sách tỉnh/thành phố:', error));

        // Sự kiện khi chọn tỉnh/thành phố
        document.getElementById('tinh_tp').addEventListener('change', function () {
            const tinhTpCode = this.value; // Lấy mã số tỉnh đã chọn
            const tinhTpName = this.options[this.selectedIndex].getAttribute('data-name'); // Lấy tên tỉnh
            document.getElementById('selected_province_name').value = tinhTpName; // Lưu tên tỉnh vào input ẩn

            const quanHuyenDropdown = document.getElementById('quan_huyen');
            const phuongXaDropdown = document.getElementById('phuong_xa');
            quanHuyenDropdown.innerHTML = '<option value="">Chọn quận huyện</option>';
            phuongXaDropdown.innerHTML = '<option value="">Chọn phường/xã</option>';
            quanHuyenDropdown.disabled = true;
            phuongXaDropdown.disabled = true;

            if (tinhTpCode) {
                // Gọi API lấy danh sách quận/huyện
                fetch(`https://provinces.open-api.vn/api/p/${tinhTpCode}?depth=2`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.districts && data.districts.length > 0) {
                            data.districts.forEach(district => {
                                const option = document.createElement('option');
                                option.value = district.code; // Giá trị là mã quận
                                option.setAttribute('data-name', district.name); // Lưu tên quận
                                option.textContent = district.name; // Hiển thị tên quận
                                quanHuyenDropdown.appendChild(option);
                            });
                            quanHuyenDropdown.disabled = false;
                        }
                    })
                    .catch(error => console.error('Lỗi khi tải danh sách quận/huyện:', error));
            }
        });

        // Sự kiện khi chọn quận/huyện
        document.getElementById('quan_huyen').addEventListener('change', function () {
            const quanHuyenCode = this.value; // Lấy mã quận đã chọn
            const quanHuyenName = this.options[this.selectedIndex].getAttribute('data-name'); // Lấy tên quận
            document.getElementById('selected_district_name').value = quanHuyenName; // Lưu tên quận vào input ẩn

            const phuongXaDropdown = document.getElementById('phuong_xa');
            phuongXaDropdown.innerHTML = '<option value="">Chọn phường/xã</option>';
            phuongXaDropdown.disabled = true;

            if (quanHuyenCode) {
                // Gọi API lấy danh sách phường/xã
                fetch(`https://provinces.open-api.vn/api/d/${quanHuyenCode}?depth=2`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.wards && data.wards.length > 0) {
                            data.wards.forEach(ward => {
                                const option = document.createElement('option');
                                option.value = ward.code; // Giá trị là mã phường
                                option.setAttribute('data-name', ward.name); // Lưu tên phường
                                option.textContent = ward.name; // Hiển thị tên phường
                                phuongXaDropdown.appendChild(option);
                            });
                            phuongXaDropdown.disabled = false;
                        }
                    })
                    .catch(error => console.error('Lỗi khi tải danh sách phường/xã:', error));
            }
        });

        // Sự kiện khi chọn phường/xã
        document.getElementById('phuong_xa').addEventListener('change', function () {
            const phuongXaName = this.options[this.selectedIndex].getAttribute('data-name'); // Lấy tên phường
            document.getElementById('selected_ward_name').value = phuongXaName; // Lưu tên phường vào input ẩn
        });
    </script>
    <!-- Nút submit -->
    <button type="submit">Gửi</button>
</form>
</body>
</html>