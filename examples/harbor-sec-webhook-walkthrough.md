# Harbor Sec Webhook Field Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 153 | ship |
| stress | claim drift | 227 | ship |
| edge | replay exposure | 173 | ship |
| recovery | policy width | 118 | watch |
| stale | trust boundary | 262 | ship |

Start with `stale` and `recovery`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `trust boundary` against `policy width`, not the raw score alone.
