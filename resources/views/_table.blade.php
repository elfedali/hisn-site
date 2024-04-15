<table class="table-auto w-full border-collapse border border-gray-200">
    <thead class="text-sm">
        <tr>
            <th class="px-4 py-1 border border-slate-300">_</th>
            <th class="px-4 py-1 border border-slate-300">_</th>
            <th class="px-4 py-1 border border-slate-300" colspan="2">
                الحصن الأول
            </th>
            <th class="px-4 py-1 border border-slate-300" colspan="3">
                الحصن الثاني
            </th>
            <th class="px-4 py-1 border border-slate-300">
                الحصن الثالث
            </th>
            <th class="px-4 py-1 border border-slate-300">
                الحصن الرابع
            </th>
            <th class="px-4 py-1 border border-slate-300">
                الحصن الخامس
            </th>
        </tr>
        <tr class="bg-violet-50">
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div>
                    رقم
                </div>
                <div>
                    الاسبوع
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div>
                    اليوم
                </div>
                <div>
                    /
                </div>
                <div>
                    التاريخ
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div class="font-semibold">
                    القراءة المستمرة
                </div>
                <div class="text-gray-500">
                    جزئين يوميا
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div class="font-semibold">
                    الاستماع المنهجي
                </div>
                <div class="text-gray-500">
                    حزب يوميا
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300 font-semibold" colspan="3"> التحضــــــــــــــــــــــير
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div class="font-semibold">
                    الحفظ الجديد</div>

                <div class="text-gray-500">
                    ( 5 ايام فقط )
                    حفظ الصفحة لمدة</div>
                <div class="text-gray-500"> 15 دقيقة</div>
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div class="font-semibold">
                    مراجعة القريب
                </div>
                <div class="text-gray-500">
                    20 صفحة ملاصقة
                </div>
                <div class="text-gray-500">
                    للحفظ الجديد
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300" rowspan="2">
                <div class="font-semibold">
                    مراجعة البعيد
                </div>
                <div class="text-gray-500">
                    ما لا يزيد عن 40 صفحة باليوم
                </div>
                <div>
                    &nbsp;
                </div>
            </td>
        </tr>
        <tr>
            <td class="px-4 py-1 border border-slate-300">
                <div class="font-semibold">أسبوعي</div>
                <div class="text-green-600 ">
                    7 صفحات
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300">
                <div class="font-semibold">ليلي</div>
                <div class="text-gray-500">
                    4 مرات استماع + 4 مرات قراءة
                </div>
            </td>
            <td class="px-4 py-1 border border-slate-300">
                <div class="font-semibold"> قبلي</div>
                <div class="text-gray-500">
                    قراءة الصفحة
                    15 دقيقة
                </div>
            </td>
        </tr>
    </thead>
    <tbody class="text-sm">

        @include('_table-weekly')

    </tbody>
</table>
