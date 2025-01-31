import { usePage } from '@inertiajs/react';
import {
    BarElement,
    CategoryScale,
    Chart as ChartJS,
    Legend,
    LinearScale,
    Title,
    Tooltip,
} from 'chart.js';
import { Bar } from 'react-chartjs-2';

ChartJS.register(
    CategoryScale,
    LinearScale,
    BarElement,
    Title,
    Tooltip,
    Legend,
);

export default function Index() {
    const { bookings = [] } = usePage().props;

    console.log(bookings);

    const availableRooms = bookings.filter(
        (b) => b.room_status === 'available',
    ).length;
    const bookedRooms = bookings.filter(
        (b) => b.room_status !== 'available',
    ).length;

    const chartData = {
        labels: ['ว่าง', 'จองแล้ว'],
        datasets: [
            {
                label: 'จำนวนห้อง',
                data: [availableRooms, bookedRooms],
                backgroundColor: ['#4CAF50', '#F44336'],
            },
        ],
    };

    return (
        <div className="container mx-auto rounded-lg bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700 p-8 shadow-lg">
            <h2 className="mb-4 text-center text-2xl font-bold text-white">
                รายการการจองที่พัก
            </h2>
            <table className="min-w-full rounded-lg bg-gray-800 text-white shadow-md">
                <thead>
                    <tr className="bg-gray-900 text-white">
                        <th className="px-4 py-3 text-left">ชื่อของลูกค้า</th>
                        <th className="px-4 py-3 text-left">หมายเลขโทรศัพท์</th>
                        <th className="px-4 py-3 text-left">หมายเลขห้อง</th>
                        <th className="px-4 py-3 text-left">สถานะห้อง</th>
                        <th className="px-4 py-3 text-left">วันที่เช็คอิน</th>
                        <th className="px-4 py-3 text-left">วันที่เช็คเอาท์</th>
                    </tr>
                </thead>
                <tbody>
                    {bookings.map((booking, index) => (
                        <tr key={index} className="border-b border-gray-700">
                            <td className="px-4 py-3">
                                {booking.customer_name}
                            </td>
                            <td className="px-4 py-3">
                                {booking.customer_phone}
                            </td>
                            <td className="px-4 py-3">{booking.room_number}</td>
                            <td className="px-4 py-3">{booking.room_status}</td>
                            <td className="px-4 py-3">
                                {booking.check_in_date}
                            </td>
                            <td className="px-4 py-3">
                                {booking.check_out_date}
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>

            <div className="mt-8 rounded-lg bg-gray-800 p-6 shadow-md">
                <h3 className="mb-4 text-center text-xl font-bold text-white">
                    สถิติห้องพัก
                </h3>
                <Bar
                    data={chartData}
                    options={{
                        responsive: true,
                        plugins: { legend: { display: true } },
                    }}
                />
            </div>
        </div>
    );
}
