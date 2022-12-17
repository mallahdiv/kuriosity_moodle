import { check, sleep, group } from 'k6';
import http from 'k6/http';
import { Counter } from 'k6/metrics';
//import { testLogin } from 'units/login';

let ErrorCount = new Counter("errors");

export let options = {
    stages: [
        {duration: '25s', target: 40}, //simulates increase to 40 VUs 
        {duration: '20s', target: 30}, //for 20s maintain 40 VUs
        {duration: '15s', target: 0} //finally scale down to 0 VUs
    ],
    thresholds: { // global pass|fail criteria 
        http_req_duration: ['p(95)<500'], // 95 percent of response times must be below 500ms
        errors: ["count<10"]
    },
}
// total test duration: 1min

export default function () {
    let res     = http.get('http://52.207.207.54/moodle/'); //test working instance
    let success = check(res, { 'response code was 200': res => res.status == 200});

    if (!success) {
        ErrorCount.add(1);
    }

    sleep(2);
}

