import { check, sleep } from 'k6';
import http from 'k6/http';



export let options = {
    stages: [
        {duration: '25s', target: 40}, //simulates increase to 40 VUs 
        {duration: '20s', target: 30}, //for 20s maintain 40 VUs
        {duration: '15s', target: 0} //finally scale down to 0 VUs
    ],
    thresholds: {
        http_req_duration: ['p(95)<500'] // 95 percent of response times must be below 500ms
    },
}
// total test duration: 1min

export default function () {
    let res = http.get('http://52.207.207.54/moodle/'); //test working instance
    check(res, { 'response code was 200': res => res.status == 200});
    sleep(3);
}

