# โปรเจคนี้เกี่ยวกับอะไร ?
>เป็นเว็บไซต์สำหรับร้านอาหารที่ช่วยอำนวยความสะดวกในการบริหารจัดการร้านอาหารที่มีฟังก์ชั่นเช่น จองโต๊ะลูกค้า,เพิ่มเมนู,เพิ่มเจ้าหน้าที่ที่เกี่ยวข้อง รวมถึงระบบในการสั่งซื้อของลูกค้า เป็นต้น
# ชื่อสมาชิกในกลุ่ม



> นายธเนศ จีนสีคง 6410451067 หมู่ 200

> ธนดล มหาพรรณ 6410450982 หมู่ 200

> สุศิษฐิ์ ต๊ะมามูล 6410451504 หมู่ 200

> พร้อมพันธุ์ เอื้อชาญเวช 6410451172 หมู่ 200

> ภาธร ยังละออ 6410451296 หมู่200

> ธนดล มหาพรรณ 6410450982 หมู่ 200

> จิรกิตต์ ชนะกลาง 6410450095 หมู่ 200


# วิธีการติดตั้ง Laravel Project **ShabuNow** (Backend)

>เข้าไปใน file ShabuNow ด้วยคำสั่ง
```bash
cd ShabuNow
```
>จากนั้นหลังด้วยคำสั่ง run คำสั่งใน bash

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

> run คำสั่งใน bash

```bash
cp .env.example .env
```

> เข้าไปใน file (.env) ของ project

```
APP_NAME="Laravel Layout"
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
REDIS_HOST=redis
```

> run คำสั่งใน bash

```bash
sail up -d
```

> run คำสั่งใน bash

```bash
sail artisan key:generate
```

> run คำสั่งใน bash

```bash
sail yarn install
```

> run คำสั่งใน bash

```bash
sail artisan storage:link
```

> run คำสั่งใน bash

```bash
sail yarn dev
```

> รัน seeder และสร้าง table ใหม่

```bash
sail artisan migrate:fresh --seed
```

### role ในการใช้งาน

---

> ### Customer 
>
> -   username: Customer@example.com
> -   password: password

---

> ### Staff
>
> -   username: Staff@example.com
> -   password: password

---
> ### Admin
>
> -   username: Admin@example.com
> -   password: password
---

> ### Chef
>
> -   username: Chef@example.com
> -   password: password
>

# รายละเอียดโปรเจคนี้
[UI flow](https://www.figma.com/file/KcFptRWJXq77pDqHliNSt9/UI-flow?type=whiteboard&node-id=0-1&t=d3LiMdcWRoBLS9oU-0)
>
>
[JIRA](https://prompan.atlassian.net/jira/software/projects/SFP/boards/2/timeline?shared=&atlOrigin=eyJpIjoiMWVhNjg4MDUyYjZkNGY0YjhlOTk4ZGIyNTA2YmU4OWIiLCJwIjoiaiJ9)
>
>
[burndown chart](https://o365ku-my.sharepoint.com/:x:/g/personal/pathorn_y_live_ku_th/EfLxkyPJhPZEnIFoOK0Jze4Bsv_FvRxumKjyl6oxUfindg?rtime=8lWkPube20g)

# ผลการรัน unit test
>รันด้วยคำสั่ง
```bash
sail artisan test --testsuite="Feature"
```
>
>

>พบการทดสอบ unit test 17 unit test โดยแยกตามหมวดหมู่ Category,Menu,Table และ User โดยการเทสให้โดยให้ตีกลับมาด้วย https ที่คาดหวังเอาไว้ เช่น การ การเข้าสู่ระบบ,การได้รับผลลัพธ์จาก GET METHODS,การกรอกฟอร์มที่ทั้งถูกต้องและไม่ถูกต้องของ POST METHODS พบว่าเป็นไปตามคาดหวัง
>
>
<img width="554" alt="Screenshot 2566-11-07 at 00 53 55" src="https://github.com/ThanadonMhp/Backend2-ShabuNow/assets/108661996/27704135-128e-4a36-9953-7c882156ba02">
>
>

# UI flow

>
>
<img width="5936" alt="UI flow" src="https://github.com/ThanadonMhp/Backend2-ShabuNow/assets/108661996/a6447c2f-97d3-42fd-a924-357024729104">

# User persona

>
>

![Userpersona](https://github.com/ThanadonMhp/Backend2-ShabuNow/assets/108661996/56405bc6-8341-4ef9-a976-9590694900a7)

# Burndown chart

>
>

![burndownChart](https://github.com/ThanadonMhp/Backend2-ShabuNow/assets/108661996/b71011c9-16b1-4f91-b470-69a9a2a2096e)




