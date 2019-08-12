<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Ml\Anomaly-detection\Apis;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: GetJob
 *
 * Date: 2019-08-06 06:59:54
 *
 * @source   ml/anomaly-detection/apis/get-job.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class GetJob extends SimpleExamplesTester {

    /**
     * Tag:  29278b6d24dd544da186019301dd4f40
     * Line: 86
     * Date: 2019-08-06 06:59:54
     */
    public function testExampleL86_29278b6d24dd544da186019301dd4f40()
    {
        $client = $this->getClient();
        // tag::29278b6d24dd544da186019301dd4f40[]
        // TODO -- Implement Example
        // GET _ml/anomaly_detectors/total-requests
        // end::29278b6d24dd544da186019301dd4f40[]

        $curl = 'GET _ml/anomaly_detectors/total-requests';

        // TODO -- make assertion
    }

// %__METHOD__%


}
