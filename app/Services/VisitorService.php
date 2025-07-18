<?php

namespace App\Services;

use App\Models\Visitor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Request;

class VisitorService
{
    /**
     * Mencatat pengunjung jika IP pengunjung belum tercatat untuk post.
     *
     * @param int $postId
     * @return void
     */
    public function post(int $postId)
    {
        $this->recordVisitor($postId, 'post_id');
    }

    /**
     * Mencatat pengunjung jika IP pengunjung belum tercatat untuk page.
     *
     * @param int $pageId
     * @return void
     */
    public function page(int $pageId)
    {
        $this->recordVisitor($pageId, 'page_id');
    }

    /**
     * Mencatat pengunjung jika IP pengunjung belum tercatat untuk agenda.
     *
     * @param int $agendaId
     * @return void
     */
    public function agenda(int $agendaId)
    {
        $this->recordVisitor($agendaId, 'agenda_id');
    }

    /**
     * Fungsi umum untuk mencatat pengunjung untuk berbagai jenis konten.
     *
     * @param int $contentId
     * @param string $contentType
     * @return void
     */
    private function recordVisitor(int $contentId, string $contentType)
    {
        $ipAddress = Request::ip();
        $userAgent = Request::userAgent();
        $url = Request::decodedPath();

        $timeFrame = Carbon::now()->subDay();

        $visitorExists = Visitor::where($contentType, $contentId)
            ->where('ip_address', $ipAddress)
            ->where('created_at', '>=', $timeFrame)
            ->exists();

        if (!$visitorExists) {
            Visitor::create([
                $contentType => $contentId,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'referrer' => $url,
            ]);
        }
    }
}