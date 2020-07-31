<?php

namespace App\Monolog;

use DDTrace\GlobalTracer;

class DatadogProcessor
{
    public function __invoke(array $record)
    {
        $span = GlobalTracer::get()->getActiveSpan();
        if (null === $span) {
            return $record;
        }

        $record['dd'] = [
            'trace_id' => $span->getTraceId(),
            'span_id'  => $span->getSpanId(),
        ];

        $record['status'] = $record['level_name'];

        return $record;
    }
}